<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileBracesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_braces', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('neckcollar', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('shoulderbrace', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('pressure_upper', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('pressure_under', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();
            $table->enum('kneebrace', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('anklebrace', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('supportsoles', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('silversplints', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('wristbrace', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('corset', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('bandlowback', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('stockings', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
  
            
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
        Schema::dropIfExists('profile_braces');   

    }
}
