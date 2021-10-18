<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Hash;


class Loginusers extends Controller
{
    //
    public function logins(Request $request){

    //    $validate = $request->validate([
    //         'name'=>'required|string',
    //         'password'=>'required|string'
    //     ]);
        $users=DB::table('registered_users')
                        ->select('registered_users.*')
                        ->where('name',$request->name)
                        ->get();

        $startups=DB::table('registered_users')
                            ->select('registered_users.*')
                            ->where('who_are_you','Startup')
                            ->count();

        $spinoff=DB::table('registered_users')
                          ->select('registered_users.*')
                          ->where('who_are_you','Spinoff')
                          ->count();

        $leaders=DB::table('registered_users')
                          ->select('registered_users.*')
                          ->where('who_are_you','Section Leader')
                          ->count();

        $employees=DB::table('registered_users')
                            ->select('registered_users.*')
                            ->where('who_are_you','Employee')
                            ->count();
        //charts 
        $spinoff_total_data=DB::select("select `updated_at`, `overall_perfo` from `director_evaluates_spinoffs`");
        $overall_perfo_y_axis=[];
        $period_x_axis=[];

        foreach($spinoff_total_data as $total_data){
            $overall_perfo_y_axis[]=$total_data->overall_perfo ;
            $period_x_axis[]=date("F",strtotime($total_data->updated_at));
        }
        
        foreach($users as $key => $user){}

        if(isset($user) && Hash::check($request->password,$user->password))
            {
                
                if($request->name === $user->name && $user->who_are_you === 'Startup'  ){
                    $request->session()->put('user',$user->name);
                    return redirect('/startup');
                    
                }elseif($request->name === $user->name && $user->who_are_you === 'Spinoff' )
                {
                    $request->session()->put('user',$user->name);
                    return redirect('/spinoff');
                }
                elseif($request->name === $user->name && $user->who_are_you === 'Section Leader' )
                {
                    $request->session()->put('user',$user->name);
                    return redirect('/section_leaders');
                }
                elseif($request->name === $user->name && $user->who_are_you === 'Project Leader' )
                {
                    $request->session()->put('user',$user->name);
                    return redirect('/project_leaders');
                }
                elseif($request->name === $user->name && $user->who_are_you === 'Employee' )
                {
                    $request->session()->put('user',$user->name);
                    return redirect('/employees');
                }
                elseif($request->name === $user->name && $user->who_are_you === 'Director')
                {

                    $data=[
                        "startup"=>$startups,
                        "spinoff"=>$spinoff,
                        "leaders"=>$leaders,
                        "employees"=>$employees
                    ];
                    $request->session()->put('user',$user->name);
                    return view('pages.dashboard')
                                    ->with('number_of_startups',$startups)
                                    ->with('number_of_spinoff',$spinoff)
                                    ->with('number_section_leaders',$leaders)
                                    ->with('number_of_employees',$employees)
                                    ->with('period_x_axis',json_encode($period_x_axis, JSON_NUMERIC_CHECK))
                                    ->with('overall_perfo_y_axis',json_encode($overall_perfo_y_axis,JSON_NUMERIC_CHECK));
                }
                
            }
        else
            {
                return redirect('/')->with('Failed', 'username or password incorrect');
            }
        

  
    }

}
