<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Device;
use EDS_site\Models\TypeDevice;
use EDS_site\Models\TypePractitioner;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Device::class, 10)->create();

        factory(Device::class, 10)->create()->each(function ($u) {            
            $typeDevice = TypeDevice::all()->random();
            $typeDevice_id = $typeDevice->getAttribute('id');
            $u->typeDevices()->attach($typeDevice_id);

            $typePractitioner = TypePractitioner::all()->random();
            $typePractitioner_id = $typePractitioner->getAttribute('id');
            $u->typePractitioners()->attach($typePractitioner_id);
        });  
    }
}
