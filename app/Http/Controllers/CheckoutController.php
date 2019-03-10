<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookingController;
use App\Booking;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use Session;
use Mail;
use App\Mail\EmailManager;

class CheckoutController extends Controller
{
    public function show_order($id)
    {
        return view('user.order',compact('id'));
    }

    public function checkout(Request $request)
    {
        $bookingcontroller = new BookingController;
        $bookingcontroller->store($request);
        $sslcommerz = new PublicSslCommerzPaymentController;
        return $sslcommerz->index($request);
    }

    public function checkout_done($booking_id, $payment_details)
    {
        $total = 0;
        foreach (Session::get('cart') as $key => $item) {
            $total = $total + $item['price'] * $item['quantity'];
        }

        $booking = Booking::find($booking_id);
        $booking->payment_status = 'paid';
        $booking->total = $total;
        $booking->paid_amount = ($total*10)/100;
        $booking->payment_details = $payment_details;
        $booking->save();

        $array['view'] = 'emails.booking';
        $array['subject'] = 'Booking Placed';
        $array['from'] = env('MAIL_USERNAME');
        $array['content'] = 'Hi. Your booking request has been submited';
        $array['booking'] = $booking;
        Mail::to($booking->email)->queue(new EmailManager($array));

        Session::forget('cart');
        flash('Thanks for your booking')->success();

        return redirect()->route('user');
    }
}
