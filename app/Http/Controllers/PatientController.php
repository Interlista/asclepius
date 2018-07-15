<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

use App\GIUnit;
use App\Bht;
use App\Proceedure;
use App\Operator;
use App\Diagnosis;
use App\Complications;
use App\ComplicationsType;

class PatientController extends Controller
{

    public function index()
    {

        $giunit = GIUnit::all()->toArray();
        $Bht = Bht::all()->toArray();
        $Proceedure = Proceedure::all()->toArray();
        $Operator = Operator::all()->toArray();
        $Diagnosis = Diagnosis::all()->toArray();
        $Complications = Complications::all()->toArray();
        $giuComplicationsTypenit = ComplicationsType::all()->toArray();

        $flights = Patient::all()->toArray();
        return view('addpatient',compact('flights','giunit','Bht','Proceedure','Operator','Diagnosis','Complications','giuComplicationsTypenit'));        
    }

    public function searchhospital()
    {
        $flights = Patient::all()->toArray();
        return view('searchhospital',compact('flights'));        
    }



     public function RegisterPatient(Request $request)
    {

        $table = new Patient();

        $meta=

        $table->patientname = $request->input('patientname');
        $table->patientdate = $request->input('patientdate');
        $table->patientage = $request->input('patientage');
        $table->patientsex = $request->input('patientsex');
        $table->patient_gi_bht = $request->input('patient_gi_bht');
        $table->patientproceedure = $request->input('patientproceedure');
        $table->patientindication = $request->input('patientindication');
        $table->patientoperator = $request->input('patientoperator');
        $table->patientfinding_intervention = $request->input('patientfinding_intervention');


        $table->save();
        return redirect()->back()->with('message','Patient Added');
        
    }


    public function getPatient()
    {
        $users = DB::table('users')->get();
        
                return view('addpatient', ['users' => $users]);
    }

}
