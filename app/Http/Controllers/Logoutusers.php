<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logoutusers extends Controller
{
    //
    public function logout(Request $request){
      
        if(session()->has('user')){
            session()->pull('user');
            return redirect('/');
        }else{
            echo "You were not logged in";
        }
        
       
    }
}
