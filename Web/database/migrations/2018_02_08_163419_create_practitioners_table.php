<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('clientele');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('rizivnumber')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->Integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');

            $table->Integer('type_practitioner_id')->unsigned()->nullable();
            $table->foreign('type_practitioner_id')->references('id')->on('type_practitioners');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practitioners');
    }
}
