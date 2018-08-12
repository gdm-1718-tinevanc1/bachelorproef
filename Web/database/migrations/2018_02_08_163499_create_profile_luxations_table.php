<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileLuxationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_luxations', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('pelvicjoint', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('hip', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('knee', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('ankle', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();
            
            $table->enum('metatarsalbone', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('toes', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('lowback', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('highback', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	


            $table->enum('ribs', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('neck', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('jaws', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('shoulder', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
  
            $table->enum('elbow', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('wrist', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('metacarpal', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
            $table->enum('fingers', ['never', 'everyday', 'weekly', 'monthly', 'rarely'])->nullable();	
  
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
        Schema::dropIfExists('profile_luxations');   
    }
}
