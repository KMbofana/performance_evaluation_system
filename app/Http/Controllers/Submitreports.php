<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salesreport;
use App\Models\Marketingreport;
use App\Models\Annualreport;

class Submitreports extends Controller
{
    //
    public function sales_revenue(Request $request){
        $sale = new Salesreport;
        $document=$request->file;
        $documentName=time().'.'.$document->getClientOriginalExtension();
        $request->file->move('reports',$documentName);
       
       
        $sale->startup_name=$request->company;
        $sale->report_from=$request->from;
        $sale->report_to=$request->to;
        $sale->report_document=$documentName;
        $sale->business_report=$request->comment;
        $sale->save();

        return redirect('sales_revenue_report');
    }



    public function marketing(Request $req){
        
        $marketing = new Marketingreport;

        $document=$req->file;
        $documentName=time().'.'.$document->getClientOriginalExtension();
        $req->file->move('reports',$documentName);

        $marketing->startup_name=$req->company;
        $marketing->report_from=$req->from;
        $marketing->report_to=$req->to;
        $marketing->report_document=$documentName;
        $marketing->business_report=$req->comment;
        $marketing->save();
        
        return redirect('marketing_report');

    }
    
    public function annual(Request $r){

        $annual= new Annualreport;

        $doc=$r->file;
        $docname=time().'.'.$doc->getClientOriginalExtension();
        $r->file->move('reports', $docname);

        $annual->startup_name=$r->company;
        $annual->report_period=$r->period;
        $annual->report_document=$docname;
        $annual->business_report=$r->comment;
        $annual->save();
        
        return redirect('annual_report');
        

        
    }

    
}
