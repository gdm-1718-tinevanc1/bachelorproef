<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phonenumber');
            $table->string('rizivnumber')->nullable();
            $table->string('function')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->Integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');

            $table->Integer('profile_medical_id')->unsigned()->nullable();
            $table->foreign('profile_medical_id')->references('id')->on('profile_medicals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
