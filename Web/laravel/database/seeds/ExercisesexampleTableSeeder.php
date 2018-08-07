<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Exercisesexample;

class ExercisesexampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Exercisesexample::class, 10)->create();
    }
}
