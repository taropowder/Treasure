<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    //
    public function cars(){
        return $this->hasMany(ClassificationCar::class);
    }
}
