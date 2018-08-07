<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceHasPractitionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_type_practitioner', function (Blueprint $table) {
            $table->Integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices');

            $table->Integer('type_practitioner_id')->unsigned();
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
        Schema::dropIfExists('device_type_practitioner');
    }
}
