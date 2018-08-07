<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Source;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Source::class, 10)->create();
    }
}
