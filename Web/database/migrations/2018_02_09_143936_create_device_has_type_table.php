<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceHasTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_type_device', function (Blueprint $table) {
            $table->Integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices');

            $table->Integer('type_device_id')->unsigned();
            $table->foreign('type_device_id')->references('id')->on('type_devices');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_type_device');
    }
}
