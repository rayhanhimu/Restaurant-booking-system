<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\BookingDetail;
use App\Table;
use Session;
use Auth;
use Nexmo;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $booking = new Booking;
        $booking->restaurant_id = $request->restaurant_id;
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->email = $request->email;
        $booking->address = $request->address;
        $booking->people = $request->people;
        $booking->date = strtotime($request->date);
        $booking->duration = $request->duration;
        $booking->time = $request->time;
        if(Auth::check()){
            $booking->user_id = Auth::user()->id;
        }
        $booking->save();

        foreach (Session::get('cart') as $key => $item) {
            $bookingDetail = new BookingDetail;
            $bookingDetail->booking_id = $booking->id;
            $bookingDetail->food_menu_id = $item['id'];
            $bookingDetail->quantity = $item['quantity'];
            $bookingDetail->save();
        }

        $request->session()->put('booking_id', $booking->id);
    }

    public function bookings(){
        $bookings = Booking::where('restaurant_id', Auth::user()->restaurant->id)->where('status', 1)->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function user_bookings(){
        $bookings = Booking::where('user_id', Auth::user()->id)->get();
        return view('user.bookings.index', compact('bookings'));
    }

    public function booking_requests(){
        $bookings = Booking::where('restaurant_id', Auth::user()->restaurant->id)->where('status', 0)->get();
        return view('admin.requests.index', compact('bookings'));
    }

    public function approve($id)
    {
        $booking = Booking::find($id);
        $booking->status = 1;
        $tables = Auth::user()->restaurant->tables;
        $table_ids = array();
        $peoples = $booking->people;
        foreach ($tables as $key => $table) {
            if($peoples > 0){
                array_push($table_ids, $table->id);
                $peoples -= $table->capacity;
            }
            else {
                break;
            }
        }
        $booking->table_ids = json_encode($table_ids);
        $booking->save();

        Nexmo::message()->send([
            'to'   => '+88'.$booking->phone,
            'from' => '+8801682506324',
            'text' => 'Your booking at '.$booking->time.' for'.$booking->duration.' has been confirmed. Thank you.'
        ]);

        return redirect()->route('requests');
    }

    public function reject($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('requests');
    }

    public function cancel($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('user');
    }
}
