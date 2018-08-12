<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypePractitioner;

class TypePractitionerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TypePractitioner::class, 10)->create();
    }
}
