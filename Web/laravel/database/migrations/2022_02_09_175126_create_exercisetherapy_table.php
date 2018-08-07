<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisetherapyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercisetherapies', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('text');
            $table->enum('right', ['good', 'wrong']);
            $table->timestamps();
            $table->softDeletes();


            $table->Integer('type_exercisetherapy_id')->unsigned();
            $table->foreign('type_exercisetherapy_id')->references('id')->on('type_exercisetherapies');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercisetherapies');
    }
}
