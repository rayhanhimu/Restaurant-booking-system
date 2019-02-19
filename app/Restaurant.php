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
}
