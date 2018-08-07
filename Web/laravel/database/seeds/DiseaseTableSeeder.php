<?php

use EDS_site\Models\Disease;
use Illuminate\Database\Seeder;

class DiseaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = [
            ['title' => 'Normale hypermobiliteit', 'shorttitle' => 'Hypermobiel', 'description' => 'Hypermobiliteit is een eigenschap waardoor de banden en kapsels rond de gewrichten elastischer zijn dan gemiddeld en daardoor verder kunnen oprekken, kunnen overstrekken. Het kan zowel erfelijk als door omstandigheden verworven zijn. Bij dit laatste denken we in de eerste plaats aan het laxer worden door teveel te stretchen, maar het kan ook ontstaan door operaties, of bepaalde aandoeningen. Hypermobiliteit op zich hoeft geen klachten te geven en verwijst dus niet noodzakelijk naar een aandoening. Voor sommige sporten kan het zelfs voordelig zijn.
            Toch dient men op te letten: Hypermobiliteit kan, ook zonder dat er sprake is van een aandoening, gemakkelijker leiden tot bepaalde klachten zoals bijvoorbeeld overbelasting van de pezen rond het hypermobiele gewricht, met ontstekingen en pijn tot gevolg, gemakkelijker luxaties, artrose, fibromyalgie,... De spieren moeten immers extra inspanning leveren om de gewrichten te ondersteunen. Pijnklachten treden echter in minder mate en minder beperkend op dan bij patiënten met HSD of EDS.'],
            ['title' => 'Hypermobility spectrum disorder', 'shorttitle' => 'HSD', 'description' => 'Hypermobiliteit kan klachten geven op verschillend vlakken, en dan spreekt men over het hypermobiliteitssyndroom. Deze klachten zijn niet alleen musculoskeletaal (gewricht, spier, pees), maar er kunnen ook problemen zijn met betrekking tot het spijsverteringsstelsel, het uro-genitale stelsel en/of het cardiovasculaire stelsel.  
            Muscoskeletale klachten zijn trauma, chronische pijn, verstoorde proprioceptie,... Daarnaast kunnen er ook een aantal musculoskeletale kenmerken aanwezig zijn, zoals platvoeten, verkeerd uitgelijnde botten in de elleboog en grote tenen, mild tot ernstige scoliosis, kyphosis, lordosis,....
            Deze grote groep patiënten, met opvallende hypermobiliteit en chronische pijnklachten, valt tussen de gewone hypermobiliteit en het Ehler-Danlos syndroom in. Gedurende lange tijd kreeg deze groep ofwel een verkeerde diagnose, ofwel geen erkenning. Pas in 2016 werden in New York criteria gedefinieerd en een naam vastgelegd: hypermobility spectrum disorder of HSD 
            Men vermoedt dat HSD een bindweefselaandoening is, maar dit is nog niet aangetoond doordat er momenteel nog te weinig gekend is over de genetische achtergrond. Het erfelijk patroon is niet zo opvallend als bij EDS.  Elementen zoals een tragere wondheling en een langere weefselbelastbaarheid, wijzen wel in de richting van een bindweefselaandoening. De fragiliteit van de weefsels is wel minder uitgesproken dan bij patiënten met EDS.
            We merken op dat een diagnose HSD of EDS niets vertelt over de ernst van de aandoening bij een specifieke patiënt. Belangrijk is dat deze patiënten met HSD evenveel aandacht verdienen en op een gelijkaardige manier behandeld dienen te worden als patiënten met EDS'],
            ['title' => 'The Ehlers Danlos syndromes', 'shorttitle' => 'EDS', 'description' => 'Lorum ipsum'],
            ['title' => 'Andere bindweefselaandoeningen', 'shorttitle' => 'Andere', 'description' => 'Andere aandoeningen met hypermobiliteit']
        ];

        Disease::insert($diseases);
    }
}
