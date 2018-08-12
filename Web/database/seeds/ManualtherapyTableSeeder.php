<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Manualtherapy;

class ManualtherapyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Manualtherapy::class, 3)->create();
    }
}
