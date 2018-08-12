<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'België', 'code' => 'Be'],
            ['name' => 'Nederland', 'code' => 'Nl'],
        ];

        Country::insert($countries);
    }
}

