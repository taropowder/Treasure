<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    protected $fillable = ['picture'];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id');

    }
}
