<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function food_categories()
    {
        return $this->hasMany(FoodCategory::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function timeConfigs()
    {
        return $this->hasMany(TimeConfig::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
