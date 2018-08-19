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

        $typePractitioner = [
            ['name' => 'Kinesist', 'description' => 'Kinesist'],
            ['name' => 'Reumatoloog', 'description' => 'Reumatoloog'],
            ['name' => 'Cardioloog', 'description' => 'Cardioloog'],
            ['name' => 'Revalidatiearts', 'description' => 'Revalidatiearts'],
            ['name' => 'Huisarts', 'description' => 'Huisarts'],
            ['name' => 'Ergotherapeut', 'description' => 'Ergotherapeut'],
            ['name' => 'Gynaecoloog', 'description' => 'Gynaecoloog'],
            ['name' => 'MDL-arts', 'description' => 'MDL-arts'],
            ['name' => 'Longarts', 'description' => 'Longarts'],
            ['name' => 'Internist', 'description' => 'Internist'],
            ['name' => 'Neuroloog', 'description' => 'Neuroloog'],
            ['name' => 'Orthopedist', 'description' => 'Orthopedist'],
            ['name' => 'Pijnarts', 'description' => 'Pijnarts'],
            ['name' => 'Uroloog', 'description' => 'Uroloog']
        ];

        TypePractitioner::insert($typePractitioner);
    }
}
