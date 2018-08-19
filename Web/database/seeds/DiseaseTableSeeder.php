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
            ['title' => 'Normale hypermobiliteit', 'shorttitle' => 'Hypermobiel', 
            'description' => '<p>Hypermobiliteit is een eigenschap waardoor de banden en kapsels rond de gewrichten elastischer zijn dan gemiddeld en daardoor verder kunnen oprekken, kunnen overstrekken. Het kan zowel erfelijk als door omstandigheden verworven zijn. Bij dit laatste denken we in de eerste plaats aan het laxer worden door teveel te stretchen, maar het kan ook ontstaan door operaties, of bepaalde aandoeningen. Hypermobiliteit op zich hoeft geen klachten te geven en verwijst dus niet noodzakelijk naar een aandoening. Voor sommige sporten kan het zelfs voordelig zijn.</p>
            <p>Toch dient men op te letten: Hypermobiliteit kan, ook zonder dat er sprake is van een aandoening, gemakkelijker leiden tot bepaalde klachten zoals bijvoorbeeld overbelasting van de pezen rond het hypermobiele gewricht, met ontstekingen en pijn tot gevolg, gemakkelijker luxaties, artrose, fibromyalgie,... De spieren moeten immers extra inspanning leveren om de gewrichten te ondersteunen. Pijnklachten treden echter in minder mate en minder beperkend op dan bij pati&euml;nten met HSD of EDS.
            </p>'],
            ['title' => 'Hypermobility spectrum disorder', 'shorttitle' => 'HSD', 
            'description' => '<p>Hypermobiliteit kan klachten geven op verschillend vlakken, en dan spreekt men over het hypermobiliteitssyndroom. Deze klachten zijn niet alleen musculoskeletaal (gewricht, spier, pees), maar er kunnen ook problemen zijn met betrekking tot het spijsverteringsstelsel, het uro-genitale stelsel en/of het cardiovasculaire stelsel. </p>
            <p>Muscoskeletale klachten zijn trauma, chronische pijn, verstoorde proprioceptie,... Daarnaast kunnen er ook een aantal musculoskeletale kenmerken aanwezig zijn, zoals platvoeten, verkeerd uitgelijnde botten in de elleboog en grote tenen, mild tot ernstige scoliosis, kyphosis, lordosis,....</p>
            <p>Deze grote groep pati&euml;nten, met opvallende hypermobiliteit en chronische pijnklachten, valt tussen de gewone hypermobiliteit en het Ehler-Danlos syndroom in. Gedurende lange tijd kreeg deze groep ofwel een verkeerde diagnose, ofwel geen erkenning. Pas in 2016 werden in New York criteria gedefinieerd en een naam vastgelegd: hypermobility spectrum disorder of HSD.</p>
            <p>Men vermoedt dat HSD een bindweefselaandoening is, maar dit is nog niet aangetoond doordat er momenteel nog te weinig gekend is over de genetische achtergrond. Het erfelijk patroon is niet zo opvallend als bij EDS. Elementen zoals een tragere wondheling en een langere weefselbelastbaarheid, wijzen wel in de richting van een bindweefselaandoening. De fragiliteit van de weefsels is wel minder uitgesproken dan bij pati&euml;nten met EDS.</p>
            <p>We merken op dat een diagnose HSD of EDS niets vertelt over de ernst van de aandoening bij een specifieke pati&euml;nt. Belangrijk is dat deze pati&euml;nten met HSD evenveel aandacht verdienen en op een gelijkaardige manier behandeld dienen te worden als pati&euml;nten met EDS.</p>'],
            ['title' => 'The Ehlers Danlos syndromes', 'shorttitle' => 'EDS', 
            'description' => '<p>Het Ehlers-Danlos syndroom, of afgekort EDS, is een groep van erfelijke bindweefselaandoeningen, waarbij het bindweefsel niet goed is aangelegd en het ongewoon rekbaar en meegevend is. </p>
            <p>Bindweefsel zit overal in ons lichaam en heeft een steunende functie. Het geeft vorm aan alle elementen van ons lichaam en vangt de krachten van het bewegen op. Het beschermt daardoor weefsels en organen. De oorzaak van EDS is meestal een afwijking in het collageen, een eiwit dat voorkomt in onze ligamenten, pezen, spieren, huid, bloedvaten,... Ons lichaam maakt collageen volgens een code die opgeslagen ligt in de genen. Indien deze code een fout bevat, dan wordt er afwijkend collageen geproduceerd. Dit afwijkend collageen maakt deel uit van ons bindweefsel, waardoor dit een abnormale samenstelling heeft. Het gevolg kan zijn dat het bindweefsel te gemakkelijk rekt of scheurt. </p>
            <p>Aangezien de aanzet tot afwijkend bindweefsel bepaalt wordt door de genen, is EDS erfelijk. Meestal is EDS autosomaal dominant. Dat betekent dat er 50% kans is dat een kind ook EDS heeft, als &eacute;&eacute;n van de ouders het heeft. <br />
            In zeldzamere gevallen is EDS autosomaal recessief of X-gebonden recessief. In dit geval zijn de ouders ongemerkt drager. Het kind krijgt de ziekte enkel als beide gezonde ouders drager zijn. <br />
            Soms kan men het als eerste in de familie verkrijgen, dan is er sprake van een spontane mutatie. In dit geval kunnen eventuele kinderen risico lopen om het over te erven, maar komt het niet voor bij andere familieleden. </p>
            <p>Er zijn meerdere types van EDS, waarbij drie grote karakteristieken in mindere of meerder mate voorkomen bij alle types. Dit zijn hyperextensibiliteit van de huid, fragiliteit van weefsels en gewrichtsmobiliteit. </p>
            <p>Sinds 2017 is er een nieuwe indeling van de verschillende types EDS. Hierbij worden ook nieuwe criteria gehanteerd. Bij nieuwe diagnoses worden deze nieuwe criteria gebruikt. Bestaande diagnoses blijven behouden. Voor het eerst is ook sprak van HSD, als een aparte groep, los van EDS. Door de criteria voor hEDS strikter te maken hoopt men vlotter een genetische oorzaak te kunnen vinden. </p>
            <p>Een diagnose EDS is erg moeilijk om vast te stellen en kan enkel door een geneticus of een multidisciplinair team dat gespecialiseerd is in bindweefselaandoeningen. Een diagnose wordt gesteld op basis van een screening van de familiale geschiedenis, een uitgebreide bevraging, een klinisch onderzoek en, indien de genmutatie gekend, een genetische test.
            </p>'],
            ['title' => 'Andere bindweefselaandoeningen', 'shorttitle' => 'Andere', 
            'description' => 'Andere aandoeningen met hypermobiliteit']
        ];

        Disease::insert($diseases);
    }
}
