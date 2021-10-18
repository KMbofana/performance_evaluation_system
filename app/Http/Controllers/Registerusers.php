<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registered_user;
use Illuminate\Support\Facades\Hash;


class Registerusers extends Controller
{
 

    protected function validator(Request $request){
        
        $validate = $request->validate([
            'name'=>'required|string|max:255',
            'trade'=>'required|string|max:255',
            'password'=>'required|string|min:8',
            'who_are_you'=>'required|string'
        ]);
       
        $registration = new Registered_user;
        $registration->name=$request->name;
        $registration->trade=$request->trade;
        $registration->password=Hash::make($request->password);
        $registration->who_are_you=$request->who_are_you;
        $registration->save();
        return redirect('/')->with('status','User Registered Successfully');
    }

    public function create(){

        return "registered";
    }
}
