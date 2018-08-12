<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('description');
            $table->softDeletes();
            $table->timestamps();

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
        Schema::dropIfExists('type_agencies');
    }
}
