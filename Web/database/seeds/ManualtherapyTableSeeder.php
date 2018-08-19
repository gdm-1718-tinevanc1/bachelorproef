<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Manualtherapy;

class ManualtherapyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $manualtherapy = [
            ['title' => 'Manuele therapie aanpassen aan hyperlaxiteit, weefselfragiliteit en pijngevoeligheid', 
                'text' => '<p>Bij de meerderheid van de pati&euml;nten met hypermobiliteit kan men mid-range mobilisaties en harmonische technieken gebruiken om gewrichtsirritatie te verminderen en spieren te ontspannen. De technieken moeten voldoende lang uitgevoerd worden om effect te hebben (ca. 15 &ndash; 30 min).<br />
                <br />
               -Vermijdt end-range mobilisaties. Deze wekken gewoonlijk teveel irritatie op<br />
               -Als de pati&euml;nt snel irritatie merkt: schakel over naar symmetrische bewegingen (flexie, extensie, lichte tractie). Deze worden beter verdragen dan rotaties en lateroflexies (asymmetrische bewegingen)<br />
               -Bij schouderinstabiliteit worden angulaire mobilisaties (bv. Elevaties, exo-en endorotatie) vaak niet goed verdragen. Harmonische technieken (schommelen met arm in een kleine mid-range bewegingsbaan bv.) kunnen verlichting bieden bij acute pijn. Zachte translatietechnieken in de juiste richting (bv. Sohier-concept) kunnen nuttig zijn om een gesubluxeerde schouder te heraligneren. Hiervoor is wel enige ervaring vereist. Bij volledige schouderluxaties is het soms nodig om de spoeddienst te consuleren. </p>
               <p>
               Indien midrange mobilisaties en harmonische technieken teveel irritatie veroorzaken, dient men te kiezen voor nog zachtere manuele technieken, zoals binnen zachte vormen van osteopathie, fasciatherapie, lymfedrainage en Sohier-technieken. Deze technieken bestaan uit langzaam opgebouwde druk of tractie, of traag uitgevoerde bewegingen.</p>
               <p>
               Manipuleren aan de hand van een high velocity thrust techniek (HVT,kraken):<br />
               Deze technieken worden over het algemeen vermeden bij hypermobiele pati&euml;nten. Ze hebben enkel hun plaats in stabiele gewrichten met een duidelijke articulaire bewegingsbeperking, als er verder geen contra-indicaties aanwezig zijn (arthrose, argumenten voor weefselfragiliteit).</p>
               <p>-Vermijdt manipulaties zeker in instabiele of erg lakse gewrichten. Het is echter zo dat niet alle gewrichten even hypermobiel zijn. Sommige gewrichten kunnen stabiel (en zelfs hypomobiel) zijn.<br />
               -Te vermijden als er bij de pati&euml;nt argumenten aanwezig zijn voor weefselfragiliteit (zie verder in deze bundel; bv. abdominale hernias, maagbreuken, liesbreuken, ligamentaire scheuren of spierscheuren in de voorgeschiedenis bij milde krachtsinwerking) <br />
               -Te vermijden bij vasculaire fragiliteit (bv. a. carotis en a. vertebralis cervicaal, grote druk op de aorta thoracaal)
               </p>'],

            ['title' => 'Manuele technieken aanpassen aan vasculaire fragiliteit', 
                'text' => '<p>Tot op vandaag bestaat weinig kennis over het gebruik van manuele technieken bij pati&euml;nten met vasculaire fragiliteit. Tevens is het onduidelijk hoe fragiel de bloedvaten zijn en aan welke krachten zij wel / niet kunnen weerstaan. </p>
                <p>-Manuele technieken met compressie op de thoracale wervelzuil of ribben): het is onduidelijk in welke mate deze technieken de intrathoracale druk verhogen. We adviseren bij patienten met een duidelijke aortaverwijding of aortagreffe voorzichtigheid bij high velocity manipulatietechnieken (bv. de standaard compressietechniek in buiklig of ruglig).</p>
                <p>-Bij patienten met mogelijke kwetsbaarheid van de a. vertebralis of a. carotis worden cervicaal best geen manipulaties uitgevoerd (HVT-technieken, kraken). Vermijd ook end-range rotaties.</p>
                <p>-Cervicale mobilisaties: In het dagelijkse leven voeren patienten herhaaldelijk cervicale flexies, rotaties en lateroflexies uit. Gewoonlijk vormen deze geen risico. Tot op vandaag bestaat echter geen richtlijn voor midrange mobilisaties bij patienten met vasculaire fragiliteit. Dergelijke technieken vallen qua krachtsinwerking binnen de bewegingen uit het dagelijkse leven. Toch is voorzichtigheid en overleg met de patient en diens behandelende artsen aangewezen, alvorens besloten wordt deze technieken uit te voeren bij de kinesitherapeut.</p>
                <p>Hieronder staan de technieken gerangschikt van een lage vasculaire belasting naar een hogere belasting: <br />
                <ul> <li>Weinig tot geen vasculaire krachtsinwerking:
                    <ul>
                    <li>Cervicale mobilisaties op de wijze van osteopaten en fasciatherapeuten: zeer langzaam uitgevoerde bewegingen, zeer langzaam opbouwende kracht, mid-range bewegingsbaan</li>
                    <li>Mid-range cervicale flexies: dit is een symmetrische techniek, waarbij geen krachten inwerken op de vasculaire structuren</li>
                    <li>Mid-range tracties</li>
                    <li>Hold-relax-technieken (isometrisch)</li>
                    </ul>
                </li>
                <li>Milde vasculaire krachtsinwerking:
                    <ul>
                    <li>Mid-range cervicale rotaties en lateroflexies, 3D-combinatietechnieken</li>
                    </ul>
                </li>
                <li>Beduidende vasculaire krachtsinwerking:
                    <ul>
                    <li>End-range rotaties</li>
                    </ul>
                </li>
                <li>Zeer grote vasculaire krachtsinwerking
                    <ul>
                    <li>Kraken (HTV-techniek, manipuleren)</li>
                    </ul>
                </li>
                </ul>
                </p>'],
        ];

        Manualtherapy::insert($manualtherapy);

    }
}
