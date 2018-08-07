<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsHasType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_type_new', function (Blueprint $table) {
            $table->Integer('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news');

            $table->Integer('type_new_id')->unsigned();
            $table->foreign('type_new_id')->references('id')->on('type_news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_type_new');   

    }
}
