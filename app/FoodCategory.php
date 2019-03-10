<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    public function FoodMenus(){
        return $this->hasMany(FoodMenu::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
