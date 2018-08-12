<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeNew;

class TypeNewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TypeNew::class, 5)->create();
    }
}
