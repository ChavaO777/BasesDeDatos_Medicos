<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medical_id', 20)->unique(); //cedula
            $table->integer('specialty_id')->unsigned();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('password', 20);
            $table->integer('consultation_cost');
            $table->timestamps();
            $table->foreign('specialty_id')->references('id')->on('specialties')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('doctors_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('office_id')->references('id')->on('offices')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
