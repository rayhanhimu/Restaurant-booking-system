<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Admin;
use App\Table;
use App\TimeConfig;
use Auth;

class TimeConfigController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
    	return view('admin.times.index');
    }

    public function showTimeConfig(){
        $timeConfigs = Auth::user()->restaurant->timeConfigs;
        return view('admin.times.show', ['timeConfigs'=> $timeConfigs]);
    }

    public function showAddTimeConfigForm(){
    	return view('admin.times.add');
    }

    public function insertTimeConfig(Request $request){
        $restaurant = Auth::user()->restaurant;
        $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

        for($j=0; $j < count($days); $j++){
            $timeConfig = new TimeConfig;
            $timeConfig->restaurant_id = $restaurant->id;
            $timeConfig->day = $days[$j];
            $timeConfig->opening_time = $request->opening_time[$j];
            $timeConfig->closing_time = $request->closing_time[$j];
            $timeConfig->save();
        }

        flash('Time Configuration inserted')->success();

        return redirect()->route('timeConfig.show');
    }

    /*public function showEditTimeConfigForm(Request $request){
        $timeConfig = TimeConfig::find($request->id);
        return view('times.edit',['timeConfig' => $timeConfig]);
    }*/

    public function updateTimeConfig(Request $request){

        $restaurant = Auth::user()->restaurant;
        $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

        for($j=0; $j < count($days); $j++){
            $timeConfig = TimeConfig::where('day', $days[$j])->where('restaurant_id', $restaurant->id)->first();
            $timeConfig->opening_time = $request->opening_time[$j];
            $timeConfig->closing_time = $request->closing_time[$j];
            $timeConfig->save();
        }

        flash('Time Configuration updated')->success();

        return redirect()->route('timeConfig.show');
    }

    public function getAvailableTimes(Request $request){

    	$day = date('l', strtotime($request->date));
        $date = strtotime($request->date);
        $people = $request->people;
    	$timeConfig = TimeConfig::where('restaurant_id',$request->id)->where('day', $day)->first();
        $capacity = Table::where('restaurant_id', $request->id)->sum('capacity');

        $data = array(
                    'options' => view('partials.available-times', ['timeConfig'=>$timeConfig, 'date'=>$date, 'people'=>$people, 'capacity'=>$capacity])->render()
                );

    	return $data;
    }

    public function available_capacity(Request $request)
    {
        $day = date('l', strtotime($request->date));
        $date = strtotime($request->date);
        $capacity = Table::where('restaurant_id', $request->id)->sum('capacity');
        $available = $capacity;
        $bookings = \App\Booking::where('date', $date)->where('time', date("H:i:s", strtotime($request->time)))->get();
        foreach ($bookings as $booking) {
            $available -= $booking->people;
        }

        return $available;
    }
}
