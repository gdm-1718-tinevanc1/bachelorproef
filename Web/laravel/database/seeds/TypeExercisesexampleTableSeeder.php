<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeExercisesexample;

class TypeExercisesexampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeExercisesexample = [
            ['name' => 'Schouders', 'description' => 'Schouders'],
            ['name' => 'Rug', 'description' => 'Rug'],
            ['name' => 'Ellebogen', 'description' => 'Ellebogen'],
            ['name' => 'Onderste ledenmaten', 'description' => 'Onderste ledenmaten'],
            ['name' => 'Nek', 'description' => 'Nek'],
        ];

        TypeExercisesexample::insert($typeExercisesexample);
    }
}
