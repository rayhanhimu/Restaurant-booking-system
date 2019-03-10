<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->email = $request->email;
        if($request->hasFile('photo')){
        $review->photo = $request->photo->store('uploads/review');
        }
        $review->restaurant_id = $request->restaurant_id;
        $review->review = $request->review;
        $review->save();

        return back();

    }

    public function destroy($id)
    {
        Review::destroy($id);
        return back();
    }
}
