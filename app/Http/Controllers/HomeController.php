<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == "SystemAdmin"){
            return view('systemadmin.home');
        }
        else if(Auth::user()->user_type == "Admin"){
            return view('admin.home');
        }
        else{
            abort(404);
        }
    }

    public function show_restaurants(Request $request)
    {
        if($request->area != null){
            $restaurants = Restaurant::where('area_id', $request->area)->where('status', 1)->get();
        }
        else{
            $restaurants = Restaurant::where('status', 1)->get();
        }

        return view('user.restaurant_list', compact('restaurants'));
    }

    public function search_restaurants(Request $request)
    {
        $restaurants = Restaurant::where('name', 'like', '%'.$request->name.'%')->where('status', 1)->get();
        return view('user.restaurant_list', compact('restaurants'));
    }

    public function show_restaurant_details($id)
    {
        $restaurant = Restaurant::find($id);
        return view('user.restaurant_details', compact('restaurant'));
    }
}
