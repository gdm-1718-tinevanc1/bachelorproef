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
        // factory(Source::class, 10)->create();

        $sources = [
            ['source' => 'Marco Castori, e. a. (2017). A Framework for the Classification of Joint Hypermobility an Related Conditions. American Journal of Medical Genetics Part C (Seminars in Medical Genetics), 175C: 148-157.', 'disease_id' => 2],
            ['source' => 'Fransiska Malfait, e. a. (2017). The 2017 International Classification of the Ehler-Danlos Syndromes. American Journal of Medical Genetics Part C (Seminars in Medical Genetics), 175C: 8-26.', 'disease_id' => 3 ],
            ['source' => 'Rorbach M SH, e. a. (2013). ZNF469 frequently mutated in the brittle cornea syndrome (BCS) is a single exon gene possibly regulating the expression of several extracellular matrix componentes. Mol Genet Metab, 109:289-295.', 'disease_id' => 3],
        ];


        //symptom_id
        Source::insert($sources);





    }

}
