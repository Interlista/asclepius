<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientname');
            $table->string('patientdate');
            $table->string('patientage');
            $table->string('patientsex');
            $table->string('patient_gi_bht');
            $table->string('patientproceedure');
            $table->string('patientindication');
            $table->string('patientoperator');
            $table->string('patientfinding_intervention');
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
        Schema::dropIfExists('patients');
    }
}
