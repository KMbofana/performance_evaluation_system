<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    //
    public function subpages(){
             return view('pages.subpages.startupevaluate',[]);
    }
}
