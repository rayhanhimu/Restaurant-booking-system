<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookingController;
use App\Booking;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use Session;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $bookingcontroller = new BookingController;
        $bookingcontroller->store($request);
        $sslcommerz = new PublicSslCommerzPaymentController;
        return $sslcommerz->index($request);
    }

    public function checkout_done($booking_id, $payment_details)
    {
        $booking = Booking::find($booking_id);
        $booking->payment_status = 'paid';
        $booking->payment_details = $payment_details;
        $booking->save();

        Session::forget('cart');
        flash('Thanks for your booking')->success();

        return redirect()->route('user');
    }
}
