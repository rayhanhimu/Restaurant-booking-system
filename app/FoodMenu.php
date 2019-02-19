<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    public function FoodCategories(){

    return $this->belongsTo(FoodCategory::class);
    }
}
