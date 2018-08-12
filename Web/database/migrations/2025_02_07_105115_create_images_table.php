<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->softDeletes();
            $table->timestamps();

            $table->Integer('type_disease_id')->unsigned()->nullable();
            $table->foreign('type_disease_id')->references('id')->on('types_diseases');

            $table->Integer('symptom_id')->unsigned()->nullable();
            $table->foreign('symptom_id')->references('id')->on('symptoms');

            $table->Integer('device_id')->unsigned()->nullable();
            $table->foreign('device_id')->references('id')->on('devices');

            $table->Integer('exercisetherapy_id')->unsigned()->nullable();
            $table->foreign('exercisetherapy_id')->references('id')->on('exercisetherapies');

            $table->Integer('exercisesexample_id')->unsigned()->nullable();
            $table->foreign('exercisesexample_id')->references('id')->on('exercisesexamples');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
