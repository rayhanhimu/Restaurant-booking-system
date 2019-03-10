<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
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
            return view('user.home');
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->website = $request->website;
        if($request->new_password != null && ($request->new_password == $request->retype_password)){
            $user->password = Hash::make($request->new_password);
        }
        if($request->hasFile('photo')){
            $user->photo = $request->photo->store('uploads');
        }
        if($user->save()){
            flash(__('Your Profile has been updated successfully!'))->success();
            return back();
        }
        flash(__('Sorry! Something went wrong.'))->error();

        return back();
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
