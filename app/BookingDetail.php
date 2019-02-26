<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    public function foodMenu(){
        return $this->belongsTo(FoodMenu::class);
    }
}
