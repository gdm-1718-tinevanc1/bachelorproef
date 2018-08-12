<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Practitioner;

class PractitionerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Practitioner::class, 40)->create();
    }
}
