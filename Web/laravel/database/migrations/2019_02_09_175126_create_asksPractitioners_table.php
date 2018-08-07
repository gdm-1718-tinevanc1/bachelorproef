<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsksPractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_practitioners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regio');
            $table->string('email');
            $table->boolean('answered');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('ask_practitioners');
    }
}
