<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Exercisetherapy;

class ExercisetherapyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Exercisetherapy::class, 6)->create();
    }
}
