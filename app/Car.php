<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    public function images(){
        return $this->hasMany(Image::class,'car_id');
    }

    public function accessories(){
        return $this->hasMany(Accessories::class,'car_id');
    }

}
