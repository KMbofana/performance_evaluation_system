<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;
class ChartsController extends Controller
{
    //starups
        public function chart()
    {
      
        
        $d=DB::select("select `overall_perform`, `updated_at` from `director_evaluates_startups` where `startup_name`='Techvision'");
        $user = [];
        $year=[];
        foreach($d as $c){

            $year[]= date('F',strtotime($c->updated_at));
            $user[]=$c->overall_perform;

         
        }

    	return view('startups.dashboard')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }

    // spinoffs
    public function spinoffchart(){
        
        $spinoff_data= DB::select("select `updated_at`,`overall_perfo` from `director_evaluates_spinoffs` where `spinoff_name`='LADS'");
        
        $perfo_y_axis =[];
        $month_x_axis =[];
        foreach($spinoff_data as $data){
            $perfo_y_axis[]=$data->overall_perfo ;
            $month_x_axis[]=date("F",strtotime($data->updated_at));
        }
        
        return view('spinoffs.dashboard')->with('month_x_axis',json_encode($month_x_axis, JSON_NUMERIC_CHECK))->with('perfo_y_axis',json_encode($perfo_y_axis,JSON_NUMERIC_CHECK));
    }

    public function section_chart(){
        
        return view('section.dashboard');
    }


}
