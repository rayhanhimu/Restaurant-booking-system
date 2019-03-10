<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table as RestaurantTable;
use App\Restaurant;
use App\Admin;
use Auth;

class RestaurantTableController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTables(){
        $tables = Auth::user()->restaurant->tables;
        return view('admin.tables.show', ['restaurantTables' => $tables]);
    }

    public function showAddTableForm(){
    	$restaurant = Auth::user()->restaurant;
    	return view('admin.tables.add');
    }

    public function insertRestaurantTable(Request $request){
    	$restaurant = Auth::user()->restaurant;

    	$restaurantTable = new RestaurantTable;
    	$restaurantTable->name = $request->name;
    	$restaurantTable->capacity = $request->capacity;
		$restaurantTable->photo = $request->photo->store('uploads');
    	$restaurantTable->restaurant_id = $restaurant->id;
    	$restaurantTable->save();

    	flash('Table inserted')->success();

        return redirect()->route('tables.show');
    }

    // public function showAddTableAutoForm(Request $request){
    // 	$min = $request->min;
    // 	$max = $request->max;
    // 	return view('tables.add_auto', ['min' => $min, 'max' => $max, 'code' => $request->code]);
    // }
	//
    // public function insertAutoRestaurantTable(Request $request){
    // 	$restaurant = Restaurant::where('code', $request->code)->first();
	//
    // 	for($i=0; $i<count($request->name); $i++){
    // 		$restaurantTable = new RestaurantTable;
    // 		$restaurantTable->name = $request->name[$i];
    // 		$restaurantTable->capacity = $request->capacity[$i];
    // 		$restaurantTable->restaurant_id = $restaurant->id;
    // 		$restaurantTable->save();
    // 	}
	//
    // 	flash('Table inserted')->success();
	//
    //     return redirect()->route('tables.show');
    // }

    public function showEditTableForm(Request $request){
        $restaurantTable = RestaurantTable::find($request->id);
        return view('tables.edit', ['restaurantTable' => $restaurantTable]);
    }

    public function updateRestaurantTable(Request $request){
        $restaurantTable = RestaurantTable::find($request->id);
        $restaurantTable->name = $request->name;
        $restaurantTable->capacity = $request->capacity;
        $restaurantTable->restaurant_type_id = $request->restaurant_type_id;

		if($request->hasFile('photo')){
            $restaurantTable->photo = $request->photo->store('uploads');
        }

        $restaurantTable->save();

        flash('Table updated')->success();

        return redirect()->route('tables.show');
    }

    public function deleteRestaurantTable(Request $request){
        $restaurantTable = RestaurantTable::find($request->id);
        $restaurantTable->delete();

        flash('Table deleted')->success();

        return redirect()->route('tables.show');
    }
}
