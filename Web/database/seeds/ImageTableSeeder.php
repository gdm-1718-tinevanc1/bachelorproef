<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Image::class, 10)->create();
    }
}
