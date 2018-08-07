<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('howfar', ['5km_without', '5km_with', '500m_without', '500m_with', '100m_without', '100m_with', '10m_without', '10m_with', '2m_without', '2m_with', 'no'])->nullable();
            $table->string('note')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->Integer('profile_walktool_id')->unsigned()->nullable();
            $table->foreign('profile_walktool_id')->references('id')->on('profile_walktools');

            $table->Integer('profile_brace_id')->unsigned()->nullable();
            $table->foreign('profile_brace_id')->references('id')->on('profile_braces');

            $table->Integer('profile_pain_id')->unsigned()->nullable();
            $table->foreign('profile_pain_id')->references('id')->on('profile_pains');

            $table->Integer('profile_luxation_id')->unsigned()->nullable();
            $table->foreign('profile_luxation_id')->references('id')->on('profile_luxations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_medicals');
    }
}
