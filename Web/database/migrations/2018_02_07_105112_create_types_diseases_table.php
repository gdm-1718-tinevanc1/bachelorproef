<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');      
            $table->longtext('info')->nullable();
            $table->longText('criteria')->nullable();
            $table->longText('diagnose')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->Integer('disease_id')->unsigned();
            $table->foreign('disease_id')->references('id')->on('diseases');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types_diseases');
    }
}