<?php

namespace App\Http\Controllers;

use App\HomePicture;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function accordingToHomePage(Request $request){
        $home_pictures = HomePicture::all();
        return view('index')->with(['home_pictures'=>$home_pictures]);
    }
}
