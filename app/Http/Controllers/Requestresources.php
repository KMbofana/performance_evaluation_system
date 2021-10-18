<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request_resource;

class Requestresources extends Controller
{
    //
    public function compusworkshop(Request $request){
        $resources=new Request_resource;
        $resources->company_name=$request->company;
        $resources->workshop_date=$request->dates;
        $resources->room=$request->room;
        $resources->expected_visitors=$request->expected;
        $resources->food=$request->breakfastandlunch;
        $resources->additional_info=$request->additionalinfo;
        $resources->save();

        return redirect('workshop');

    }
}
