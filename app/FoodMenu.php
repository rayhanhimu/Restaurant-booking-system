<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    public function FoodCategory(){
        return $this->belongsTo(FoodCategory::class);
    }
}
