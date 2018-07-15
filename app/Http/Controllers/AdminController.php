<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GIUnit;
use App\Bht;
use App\Proceedure;
use App\Operator;
use App\Diagnosis;
use App\Complications;
use App\ComplicationsType;

class AdminController extends Controller
{
    public function addgiunit(Request $request)
    {

        $table = new GIUnit();
        $table->giunit = $request->input('addgiunit');
        $table->save();
        return redirect()->back()->with('message','GI Unit Added');
        
    }

    public function addbht(Request $request)
    {

        $table = new Bht();
        $table->bht = $request->input('addbht');
        $table->save();
        return redirect()->back()->with('message','BHT Added');
        
    }

    

    public function addproceedure(Request $request)
    {

        $table = new Proceedure();
        $table->proceedure = $request->input('addproceedure');
        $table->save();
        return redirect()->back()->with('message','Proceedure Added');
        
    }



    public function addoperator(Request $request)
    {

        $table = new Operator();
        $table->operator = $request->input('addoperator');
        $table->save();
        return redirect()->back()->with('message','Operator Added');
        
    }



    public function adddiagnosis(Request $request)
    {

        $table = new Diagnosis();
        $table->diagnosis = $request->input('adddiagnosis');
        $table->save();
        return redirect()->back()->with('message','Diagnosis Added');
        
    }



    public function addcomplication(Request $request)
    {

        $table = new Complications();
        $table->complications = $request->input('addcomplication');
        $table->save();
        return redirect()->back()->with('message','Complication Added');
        
    }



    public function addcomplicationstype(Request $request)
    {

        $table = new ComplicationsType();
        $table->complicationstype = $request->input('addcomplicationstype');
        $table->save();
        return redirect()->back()->with('message','complication type Added');
        
    }


}
