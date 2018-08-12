<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Treatment;

class TreatmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Treatment::class, 10)->create();
    }
}
