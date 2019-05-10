<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassificationCar extends Model
{
    //
    protected $fillable = ['car_id','classification_id'];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id');

    }

    public function classification(){
        return $this->belongsTo(Classification::class, 'classification_id');

    }
}
