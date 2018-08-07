<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeDisease;

class TypeDiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hsd = [
            ['name' => 'Localised-HSD (L-HSD)', 'info' => 'hypermobiliteit in minder dan 5 gewrichten.
            Daarnaast zijn er 1 of meer musculoskeletale klachten aanwezig.', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
            ['name' => 'Generalised HSD (G-HSD)', 'info' => 'hypermobiliteit in vijf of meer gewrichten. 
            De hypermobiliteit wordt objectief beoordeeld (bvb door de Beighton-score). Daarnaast zijn er 1 of meer musculoskeletale klachten.  Een degelijk onderzoek is nodig om de mogelijke aanwezigheid van hEDS uit te sluiten. 
            ', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
            ['name' => 'Peripheral-HSD (P-HSD)', 'info' => 'hypermobiliteit is enkel aanwezig in handen en/of voeten
            Daarnaast zijn er 1 of meer musculoskeletale klachten aanwezig.', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
            ['name' => 'Historical-HSD (H-HSD)', 'info' => 'hypermobiliteit, zelf aangegeven vanuit het verleden.
            Een objectieve controle van de hypermobiliteit heeft een negatief resultaat. Er zijn wel 1 of meer musculoskeletale klachten aanwezig. Fysiek onderzoek is er op gericht om de andere diagnoses van HSD, maar ook reumatologische aandoeningen uit te sluiten. 
            ', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
        ];

        TypeDisease::insert($hsd);

        $other = [
            ['name' => 'Andere bindweefselaandoeningen', 'info' => 'Cutis Laxa Syndroom, Erfelijke Aorta Aneurysma, Loeys-Dietz, Marfan Syndroom, Osteogenesis Imperfecta, Beals Syndroom,...', 'disease_id' => 4],
            ['name' => 'Skeletale dysplasiën', 'info' => 'Larsen Syndroom, Desbuquis Syndroom,...
            ', 'disease_id' => 4],
            ['name' => 'Erfelijke spierziekten', 'info' => 'Bethlem myopathie,...', 'disease_id' => 4],
            ['name' => 'Chromosonale afwijkingen', 'info' => 'Down-syndroom,...', 'disease_id' => 4],
            ['name' => 'andere aangeboren aandoeningen', 'info' => 'Kabuki-syndroom, fragile-x-syndroom,...', 'disease_id' => 4],
        ];

        TypeDisease::insert($other);


    }
}
