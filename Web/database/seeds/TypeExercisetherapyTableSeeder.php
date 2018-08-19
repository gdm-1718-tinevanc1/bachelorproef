<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeExercisetherapy;

class TypeExercisetherapyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeExercisetherapy = [
            ['name' => 'Hyperlaxiteit', 'description' => 'Oefentherapie aanpassen aan hyperlaxiteit'],
            ['name' => 'Weefselfragiliteit', 'description' => 'Oefentherapie aanpassen aan weefselfragiliteit'],
            ['name' => 'Botfragiliteit', 'description' => 'Oefentherapie aanpassen aan botfragiliteit'],
            ['name' => 'Vasculaire fragiliteit ', 'description' => 'Oefentherapie aanpassen aan vasculaire fragiliteit'],
        ];


        TypeExercisetherapy::insert($typeExercisetherapy);
    }
}
