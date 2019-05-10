<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function displayPage(Request $request){
        $page = Page::find($request->route('page'));
        return view('page')->with(['page'=>$page]);
    }
}
