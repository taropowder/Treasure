<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function showProductDetails(Request $request){
        $car_id = $request->route('CarId');
        $car = Car::find($car_id);
        return view('detail')->with(['car'=>$car]);
    }
}
