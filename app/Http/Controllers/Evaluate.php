<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director_evaluates_startup;
use App\Models\Director_evaluates_spinoff;
use App\Models\directs_evaluates_section;
use App\Models\director_evaluation_employee;

class Evaluate extends Controller
{
    //
    public function startupeval_record(){
        $data=request('rating');
        $rating=array(
            "q"=>request('quality'),
            "p"=>request('productivity'),
            "m"=>request('market'),
            "s"=>request('skills'),
            "i"=>request('inflows'),
            "o"=>request('outflows'),
            "g"=>request('growth'),
            "suc"=>request('success'),
        );
      $array_sum=[];
      foreach($rating as $k => $v){
          foreach($v as $t){
            $array_sum[]=$t;
          }

      }
      $calc=array_sum($array_sum)/8;
        $imp=implode(",",$data);
        
        $evaluate = new Director_evaluates_startup;
        $evaluate->	startup_name='Techvision';
        $evaluate-> business_quality=$rating['q'][0];
        $evaluate-> productivity=$rating['p'][0];
        $evaluate-> market_penetration=$rating['m'][0];
        $evaluate-> technical_skills=$rating['s'][0];
        $evaluate-> cash_inflows=$rating['i'][0];
        $evaluate-> cash_outflows=$rating['o'][0];
        $evaluate-> growth=$rating['g'][0];
        $evaluate-> product_success=$rating['suc'][0];
        $evaluate->overall_perform=$calc;
        $evaluate->save();
        
        return redirect('startupevaluate');
        
        
    }

    public function spinoff_evaluation(Request $req ){
        $ar_sum=[];
        $sum_array=array(
           $req->quality[0],
           $req->productivity[0],
           $req->market[0],
           $req->skills[0],
           $req->inflows[0],
           $req->outflows[0],
           $req->growth[0],
           $req->success[0],
        );
        
        foreach($sum_array as $v){
            $ar_sum[]=$v;
        }
        
        $calz=array_sum($ar_sum)/8;

        $spinoff=new Director_evaluates_spinoff;
        $spinoff->spinoff_name="LADS";
        $spinoff->business_quality=$req->quality[0];
        $spinoff->productivity=$req->productivity[0];
        $spinoff->market_penetration=$req->market[0];
        $spinoff->technical_skills=$req->skills[0];
        $spinoff->cash_inflows=$req->inflows[0];
        $spinoff->cash_outflows=$req->outflows[0];
        $spinoff->growth=$req->growth[0];
        $spinoff->product_success=$req->success[0];
        $spinoff->overall_perfo=$calz;
        
        $spinoff->save();
        return redirect('spinoffevaluate');
        
    }
    public function Director_evaluates_section_leader(Request $request){
        $section= new directs_evaluates_section;
        $section->leader_name='K Mbofana';
        $section->quality_of_work=$request->quality;
        $section->productivity=$request->productivity;
        $section->knowledge=$request->knowledge;
        $section->leading_skills=$request->skills;
        $section->time_conscious=$request->time;
        $section->creativity=$request->creativity;
        $section->delegation=$request->delegation;
        $section->decision_making=$request->decision;
        $section->meet_goals=$request->goals[0];
        $section->save();
        
        return redirect('sectionevaluate');
    }

    public function Director_evaluates_employee(Request $rq){
        $employee = new director_evaluation_employee;
        $employee->quality_of_work=$rq->quality;
        $employee->productivity=$rq->productivity;
        $employee->punctuality=$rq->punctuality;
        $employee->technical_skills=$rq->skills;
        $employee->timeous=$rq->time;
        $employee->creativity=$rq->creativity;
        $employee->decision_making=$rq->decision;
        $employee->meet_goals=$rq->goals;
    }
}
