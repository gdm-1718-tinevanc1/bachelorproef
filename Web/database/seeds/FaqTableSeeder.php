<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Faq::class, 10)->create();

        $faqs = [            
            ['subject' => 'Bloedonderzoek', 'question' => 'Waarom wordt er geen bloedonderzoek gevoerd?', 
            'answer' => 'Voor het klassieke type, vasculaire type, arthrochalasie type, dermatosparaxis type en kyfoscoliotische type kent men het gen waarin het defect gelegen is. Als men tijdens het klinisch onderzoek uiterlijke kenmerken bij u opmerkt
            of in uw familiegeschiedenis zaken opmerkt die op deze types wijzen, wordt bij u bloedonderzoek opgestart om de gekende genen na te kijken.
            Voor het hypermobiele type is de genetiche basis nog niet gekend. Als men tijdens het klinisch onderzoek geen aanwijzingen vindt voor de EDS-types waarvan men het genetische defect kent, dan is bloedonderzoek overbodig. Men kan het hypermobiele type van EDS immers
            nog niet vaststellen via bloedonderzoek of weefselonderzoek, maar enkel via de klinische kenmerken (hypermobilitieit, zeer opvallende fragiliteit, meerdere opvallende uiterlijke kenmrken).'],
            ['subject' => 'Huidbiopsie', 'question' => 'Waarom wordt er geen huidbiopsie gevoerd?', 
            'answer' => 'Veel mensen dat elektronenmicroscopie van de huid de aanwezigheid van hEDS kan bevestigen, maar dat klopt niet. Bij sommige patiënten zijn milde afwijkingen te vinden in een huidbiopt. Bij het overgrote deel is echter niets te zien.'],
            ['subject' => 'Diagnose', 'question' => 'Wie kan er vaststellen of ik hEDS heb?', 
            'answer' => 'Bindweefselaandoeningen kunnen erg op elkaar lijken voor een arts of therapeut die niet geschoold zijn in dit domein. Enkel een geneticus of multidisciplinair team met specialisatie in bindweefselaandoeningen is in staat om deze aandoeningen van elkaar te onderscheiden op basis van een grondige familiescreening,
            een uitgebriede klinisch onderzoek en bevraging.'],
            ['subject' => 'Ziekte-erkenning', 'question' => 'Hoe zit het met hEDS en ziekte-erkenning?', 
            'answer' => 'In de voorbije jaren won hEDS aan bekendheid. Toch wordt de aandoening vaak nog niet erkend door mutualiteiten en andere instanties. Op vlak van kinesitherapie is het meestal mogelijk om een E-pathologie aan te vragen,
            mits de behandelende huisarts of fysisch geneesheer en de behandelende kinesitherapeut zorgen voor een uitgebreid documentatie van: De gewrichtslaxiteit, de problemen op vlak van motorische controle, de spierzwakte en de functionele beperkingen in het dagelijks leven.'],
            ['subject' => 'Bloedonderzoek', 'question' => 'Kan ik meerdere types hebben?', 
            'answer' => 'Dit is zeer zeldzaam. In theorie is het mogelijk dat iemand 1 type EDS erft van de ene ouder, en een andere type EDS van de andere ouder.
            Er zijn echter geen gevallen bekend waarin dit zo voorkomt. Het is wel mogelijk dat je ziektetekenen vertoont die bij verschillende EDS-types voorkomen.
            Patiënten met het vasculaire type EDS kunnen bijvoorbeeld ook hypermobiliteit vertonen, en patiënten met het hypermobiele type van EDS kunnen ook een milde verwijding van de aorta vertonen, of problemen met de hartkleppen.'],
            ['subject' => 'Bloedonderzoek', 'question' => 'Ik heb POTS, maagdarmklachten, vermoeidheid, mast cell dysfunctie, spierkrampen,.. waarom heb ik geen hEDS?', 
            'answer' => 'Deze klachten komen niet alleen bij hEDS voor, maar ook bij verschillende andere aandoeningen, zoals fibromyalgie, het chronisch vermoeidheidssyndroom en HSD.'],
            ['subject' => 'Rekbare huid', 'question' => 'Wat verstaat men onder een rekbare huid?', 
            'answer' => 'Volgens de laatste nosologie verstaat men hier onder : De huid is hyperextensibel indien men de huid van de hals, ellebogen en knieën 3cm kan rekken, en 1,5cm bij het distale deel van de onderarmen en de achterkant van de handen. Men knijpt hiervoor de huid tussen de vingers en tilt hem op. '],
            ['subject' => 'Beighton score', 'question' => 'Wat is de beighton score?', 
            'answer' => 'De Beighton score is een 9 punten scoresysteem dat is gebaseerd op de Beighton criteria waarmee de gewrichtslaxiteit en hypermobiliteit kan worden gemeten. Een score van 1 betekent geringe laxiteit, een score van 9 betekent bovenmatig hypermobiel en kan duiden op ernstige pathologie zoals bij het Ehlers Danlos syndroom De maximale bewegingsuitslag van 9 gewrichten wordt passief gemeten. Gebruik hiervoor een goniometer en leg de ROM (=range of motion) vast in het Fysiotherapeutisch Electronisch patientendossier. ']

        ];

        Faq::insert($faqs);

    }
}
