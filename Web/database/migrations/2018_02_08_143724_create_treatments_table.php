<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('info');
            $table->mediumtext('problem');
            $table->softDeletes();
            $table->timestamps();

            $table->Integer('type_practitioner_id')->unsigned()->nullable();
            $table->foreign('type_practitioner_id')->references('id')->on('type_practitioners');

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
        Schema::dropIfExists('treatments');
    }
}
