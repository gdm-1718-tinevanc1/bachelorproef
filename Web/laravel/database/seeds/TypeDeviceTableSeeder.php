<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeDevice;

class TypeDeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typedevices = [
            ['name' => 'Schouders'],
            ['name' => 'Hoofd'],
            ['name' => 'Benen'],
            ['name' => 'Enkels'],
            ['name' => 'Voeten'],
            ['name' => 'Heupen'],
            ['name' => 'Nek'],
            ['name' => 'Rug'],
            ['name' => 'Knieen'],
            ['name' => 'Handen'],
            ['name' => 'Polsen'],
            ['name' => 'Armen'],
            ['name' => 'Ellebogen']
        ];

        TypeDevice::insert($typedevices);
    }
}
