<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('intention');
            $table->mediumText('procedure');
            $table->softDeletes();
            $table->timestamps();
            
            $table->Integer('type_agency_id')->unsigned()->nullable();
            $table->foreign('type_agency_id')->references('id')->on('type_agencies');

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
        Schema::dropIfExists('devices');
    }
}
