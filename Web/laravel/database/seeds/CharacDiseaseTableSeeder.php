<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\CharacDisease;

class CharacDiseaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hypermobiel_id = EDS_site\Models\Disease::where('shorttitle', 'Hypermobiel')->first()->id;
        $hsd_id = EDS_site\Models\Disease::where('shorttitle', 'HSD')->first()->id;
        $eds_id = EDS_site\Models\Disease::where('shorttitle', 'EDS')->first()->id;
        $other_id = EDS_site\Models\Disease::where('shorttitle', 'Andere')->first()->id;
        $characs = [
            ['description' => 'hypermobiliteit in een beperkt aantal gewrichten', 'disease_id' => $hypermobiel_id],
            ['description' => 'hypermobiliteit in meerdere gewrichten', 'disease_id' => $hypermobiel_id],

            ['description' => 'Hypermobiliteit in veel gewrichten', 'disease_id' => $hsd_id],
            ['description' => 'Wijdverspreide pijn', 'disease_id' => $hsd_id],
            ['description' => 'Fragiliteit van de weefsels is mogelijk, maar minder doorgedreven dan EDS', 'disease_id' => $hsd_id],

            ['description' => 'Hypermobiliteit in veel gewrichten', 'disease_id' => $eds_id],
            ['description' => 'Wijdverspreide pijn', 'disease_id' => $eds_id],
            ['description' => 'Zeer opvallende fragiliteit van de zachte weefsels', 'disease_id' => $eds_id],
            ['description' => 'Meerdere uiterlijke tekenen van een bindweefselaandoening', 'disease_id' => $eds_id],

            ['description' => 'Marfan syndroom', 'disease_id' => $other_id],
            ['description' => 'Osteogrenesis imperfecta', 'disease_id' => $other_id],
            ['description' => 'Stickler syndroom', 'disease_id' => $other_id],
        ];

        CharacDisease::insert($characs);
    }
}


