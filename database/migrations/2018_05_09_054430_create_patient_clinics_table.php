<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientname_clinic');
            $table->string('patientage_clinic');
            $table->string('patientgender_clinic');
            $table->string('patientoccupation_clinic');
            $table->string('patienthometown_clinic');
            $table->string('patientgi_clinic');
            $table->string('patientdiagnosis_clinic');
            $table->string('patientyearofdiagnosis_clinic');
            $table->string('patientcomplication_clinic');
            $table->string('patientcomplicationtype_clinic');
            $table->string('patienthaematological_clinic');
            $table->string('patientimaging_clinic');
            $table->string('patientendoscopy_clinic');
            $table->string('patientbodyweight_clinic');
            $table->string('patientcomplains_clinic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_clinics');
    }
}
