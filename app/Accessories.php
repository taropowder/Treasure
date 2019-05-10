<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    //

    protected $fillable = ['name','picture'];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id');

    }
}
