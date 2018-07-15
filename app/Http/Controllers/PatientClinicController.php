<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientClinic;

//admins
use App\GIUnit;
use App\Bht;
use App\Proceedure;
use App\Operator;
use App\Diagnosis;
use App\Complications;
use App\ComplicationsType;

class PatientClinicController extends Controller
{

    public function index()
    {

        $giunit = GIUnit::all()->toArray();
        $Bht = Bht::all()->toArray();
        $Proceedure = Proceedure::all()->toArray();
        $Operator = Operator::all()->toArray();
        $Diagnosis = Diagnosis::all()->toArray();
        $Complications = Complications::all()->toArray();
        $ComplicationsType = ComplicationsType::all()->toArray();

        $flights = PatientClinic::all()->toArray();
        return view('addpatientclinic',compact('flights','giunit','Bht','Proceedure','Operator','Diagnosis','Complications','ComplicationsType'));        
    }

    public function searchclinic()
    {
        $flights = PatientClinic::all()->toArray();
        return view('searchclinic',compact('flights'));        
    }


    public function RegisterPatientClinic(Request $request)
    {

        $table = new PatientClinic();

        $table->patientname_clinic = $request->input('patientname_clinic');
        $table->patientage_clinic = $request->input('patientage_clinic');
        $table->patientgender_clinic = $request->input('patientgender_clinic');
        $table->patientoccupation_clinic = $request->input('patientoccupation_clinic');
        $table->patienthometown_clinic = $request->input('patienthometown_clinic');
        $table->patientgi_clinic = $request->input('patientgi_clinic');
        $table->patientdiagnosis_clinic = $request->input('patientdiagnosis_clinic');
        $table->patientyearofdiagnosis_clinic = $request->input('patientyearofdiagnosis_clinic');
        $table->patientcomplication_clinic = $request->input('patientcomplication_clinic');
        $table->patientcomplicationtype_clinic = $request->input('patientcomplicationtype_clinic');
        $table->patienthaematological_clinic = $request->input('patienthaematological_clinic');
        $table->patientimaging_clinic = $request->input('patientimaging_clinic');
        $table->patientendoscopy_clinic = $request->input('patientendoscopy_clinic');
        $table->patientbodyweight_clinic = $request->input('patientbodyweight_clinic');
        $table->patientcomplains_clinic = $request->input('patientcomplains_clinic');

        $table->save();
        return redirect()->back()->with('message','Patient Added');
        
    }
}
