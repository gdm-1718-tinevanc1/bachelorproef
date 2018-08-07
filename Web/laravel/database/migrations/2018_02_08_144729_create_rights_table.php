<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumtext('description');
            $table->softDeletes();
            $table->timestamps();

            $table->Integer('type_agency_id')->unsigned()->nullable();
            $table->foreign('type_agency_id')->references('id')->on('type_agencies');

            $table->Integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rights');
    }
}
