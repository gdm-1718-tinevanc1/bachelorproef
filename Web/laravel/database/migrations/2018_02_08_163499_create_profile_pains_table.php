<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilePainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_pains', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('shoulderjoint_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('shoulderjoint_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('shoulderbelt_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('shoulderbelt_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('elbow_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('elbow_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('upperarm_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('upperarm_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('underarm_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('underarm_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('wristjoint_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('wristjoint_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('knuckles_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('knuckles_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('thumbbase_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('thumbbase_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('fingerjoints_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('fingerjoints_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('hipjoint_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('hipjoint_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('buttock_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('buttock_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('knee_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('knee_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('ankle_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('ankle_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('foot_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('foot_right', ['none', 'mild', 'moderate', 'severe'])->nullable();
            $table->enum('toes_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('toes_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('neck', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('jaw_left', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('jaw_right', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('lowerback', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('upperback', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('chest', ['none', 'mild', 'moderate', 'severe'])->nullable();	
            $table->enum('belly', ['none', 'mild', 'moderate', 'severe'])->nullable();	
   
            
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
        Schema::dropIfExists('profile_pains');   
    }
}
