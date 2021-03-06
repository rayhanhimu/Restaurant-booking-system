<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->user_id = Auth::user()->id;
        $restaurant->area_id = $request->area;
        $restaurant->save();
        $user = Auth::user();
        $user->user_type = 'Admin';
        $user->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->status = 1;
        $restaurant->save();

        flash('Restaurant approved')->success();

        return redirect()->route('home');
    }

    public function photo(Request $request)
    {
        if($request->hasFile('photo')){
            $restaurant = Auth::user()->restaurant;
            $restaurant->photo = $request->photo->store('uploads');
            $restaurant->save();
        }
        return redirect()->route('home');
    }
}
