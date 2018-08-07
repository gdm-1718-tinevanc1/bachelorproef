<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileWalktoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_walktools', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('wheelchair', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('elecwheelchair', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('balancebike', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('crutch', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_walktools');
    }
}
