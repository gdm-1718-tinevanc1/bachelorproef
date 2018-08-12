<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesexampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercisesexamples', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('name');
            $table->mediumText('description');
            $table->timestamps();
            $table->softDeletes();

            $table->Integer('type_exercisesexample_id')->unsigned();
            $table->foreign('type_exercisesexample_id')->references('id')->on('type_exercisesexamples');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercisesexamples');
    }
}
