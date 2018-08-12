<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Symptom;

class SymptomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Symptom::class, 20)->create();
    }
}
