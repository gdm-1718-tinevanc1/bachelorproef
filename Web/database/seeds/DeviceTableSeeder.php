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
        $devices = [
            ['name' => 'Silversplints', 
            'intention' => 'silversplints zijn een specifieke vorm van handgemaakte ortheses in zilver. Ze ondersteunen en stabiliseren de gewrichten, om zo de grijpfunctie te optimaliseren. Daardoor kunnen dagelijkse activiteiten makkelijker en met minder pijn worden uigevoerd.   
            ', 
            'procedure' => 'Silversplints worden voorgeschreven door een arts. Indien de silversplints worden voorgeschreven door één van de onderstaande geneesheer-specialisten, kan men een (gedeeltelijke) terugbetaling van de mutualiteit verkrijgen. Silversplints mogen worden voorgeschreven door een geneesheer-specialist in de orthopedie, fysische geneeskunde en revalidatie, pediatrie, reumatologie, neurologie, chirurgie en neuropsychiatrie. Tijdens een eerste gesprek met de orthopedisch verstrekker/ergotherapeut worden de stoornissen en problemen in kaart gebracht. Eventueel kunnen reeds enkele ortheses in thermoplastisch materiaal worden gemaakt, zodat deze kunnen uitgetest worden. In bepaalde gevallen wordt vooraf akkoord aangevraagd aan de adviserende geneesheer Na het uittesten worden de maten nauwkeurig genomen, en de silversplints besteld. 
            ',
            'type_agency_id' => 2],

            ['name' => 'rolstoel', 
            'intention' => 'verhogen mobiliteit', 
            'procedure' => 'Aanvraag kan ingevuld worden door iedere arts en dient bezorgd te worden aan een erkende bandagist. Voor bepaalde rolstoelen is ook een multidisciplinair functioneringsrapport nodig, dat opgesteld werd door een multidisciplinair team. De arts of bandagist kan hierover meer info geven. De erkende bandagist stelt een bepaald type rolstoel voor op basis van de behoeften van de patiënt en de technische mogelijkheden. Hij stuurt de nodige documenten op naar het adviserende arts van het ziekenfonds, die beslist of de aanvraag goedgekeurd wordt. Eventueel kan hij om bijkomende inlichtingen vragen, of kan een uitnodig voor consultatie bij de adviserend geneesheer volgen. De mutualiteit deelt de beslissing mee aan de bandagist. Bij een positieve beslissing wordt de rolstoel afgeleverd. ',
            'type_agency_id' => 2],

            ['name' => 'krukken/elleboogkrukken', 
            'intention' => 'steun geven tijdens het stappen en de onderste ledematen ontlasten. ', 
            'procedure' => 'De aankoop van krukken is vrij, aangezien deze nooit terugbetaald worden. Toch kunnen ze een belangrijke hulp zijn. Keuze van krukken is vrij te bepalen. Gewone krukken kunnen via uitleendiensten, vaak verbonden aan de mutualiteit, gehuurd worden.  Aangezien gewone krukken een zware belasting vormen voor de polsen, is bij eds elleboogkrukken aangewezen. ',
            'type_agency_id' => 7],

            ['name' => 'steunzolen', 
            'intention' => 'Steunzolen of correctiezolen hebben als doel de voetstand (permanent) te corrigeren. Ze ondersteunen de gewrichten, banden en kapsels van de voet door middel van passieve ondersteuning van het voetgewelf en de voorvoet, om op die manier te helpen bij bepaalde klachten. Het  werkingsgebied van correctiezolen gaat verder dan alleen de voet. Voeten staan aan de basis van het skelet en worden een groot deel van de dag zwaar belast. Wordt de balans in de voetstand om wat voor reden dan ook verstoord, dan zal dit effect hebben op de rest van het lichaam waardoor een groot aantal klachten kan ontstaan.', 
            'procedure' => 'Steunzolen moeten voorgeschreven worden door een arts-specialist in de orthopedie, fysische geneeskunde of revalidatie, pediatrie, reumatologie, neurologie, chirurgie of neuropsychiatrie. Dat geldt zowel bij een eerste levering als bij een hernieuwing. Er is gedeeltelijke terugbetaling voorzien indien de steunzolen gemaakt worden door een erkend bandagist of orthopedist. Ook een podoloog mag steunzolen afleveren, maar dan is geen tegemoetkoming van het RIZIV mogelijk.  Sommige mutualiteiten voorzien ook bij een podoloog een beperkte tussenkomst. Informeren is dus belangrijk. Na een nauwkeurig opmeten van de voeten, worden steunzolen rekening houdend met de klachten op maat gemaakt. Tot de leeftijd van 18 jaar worden steunzolen jaarlijks gedeeltelijk terugbetaald. Daarna is het tweejaarlijks. ',
            'type_agency_id' => 2],

            ['name' => 'orthopedische schoenen', 
            'intention' => 'Wanneer steunzolen de voetstand onvoldoende kunnen corrigeren wordt overgegaan naar orthopedische schoenen. ', 
            'procedure' => 'Orthopedische schoenen moeten voorgeschreven worden door een arts-specialist in de orthopedie, fysische geneeskunde of revalidatie, pediatrie, reumatologie, neurologie, chirurgie of neuropsychiatrie. Dat geldt zowel bij een eerste levering als bij een hernieuwing. De schoentechnieker bezorgt het doktersvoorschrift en het aanvraagformulier aan uw mutualiteit. Bij een eerste aanvraag roept de mutualiteit u op voor een controleonderzoek bij de adviserende geneesheer. Na deze controle worden u en de orthopedisch verstrekker schriftelijk op de hoogte gebracht van de beslissing. De betaling gebeurt via de derdebetalersregeling: enkel de eigen bijdrage wordt betaald. De rest wordt rechtstreeks door de mutualiteit betaald. De hernieuwingstermijn is vanaf 18 tot 65 jaar jaarlijks. Daarna wordt het twee jaarlijks.',
            'type_agency_id' => 2],

            ['name' => 'orthese op maat', 
            'intention' => 'Orthesen kunnen stabiliseren, immobiliseren, ontlasten of de beweging geleiden op een fysiologisch correcte manier, met behoud van de flexibiliteit waar nodig. Zo wordt het ontstaan van een verkeerde houding en een verkeerde belasting van het lichaamsdeel voorkomen, beperkt of gecorrigeerd. Indien de gewenste maat te veel afwijkt van de standaard maat van prefab orthesen of wanneer de werking van een prefab orthese niet voldoet voor een specifieke klacht, wordt een orthese op maat gemaakt. ', 
            'procedure' => 'Orthesen worden voorgeschreven door een arts. Indien de orthese wordt voorgeschreven door één van de onderstaande geneesheer-specialisten, kan men een (gedeeltelijke) terugbetaling van de mutualiteit verkrijgen. Een orthese mag worden voorgeschreven door een geneesheer-specialist in de orthopedie, fysische geneeskunde en revalidatie, pediatrie, reumatologie, neurologie, chirurgie en neuropsychiatrie. Met het voorschrift kan men terecht bij een orthopedisch technicus die de brace aanmeet en vervaardigd. ',
            'type_agency_id' => 2],


            ['name' => 'lumbostaat', 
            'intention' => 'Steunzolen of correctiezolen hebben als doel de voetstand (permanent) te corrigeren. Ze ondersteunen de gewrichten, banden en kapsels van de voet door middel van passieve ondersteuning van het voetgewelf en de voorvoet, om op die manier te helpen bij bepaalde klachten. Het  werkingsgebied van correctiezolen gaat verder dan alleen de voet. Voeten staan aan de basis van het skelet en worden een groot deel van de dag zwaar belast. Wordt de balans in de voetstand om wat voor reden dan ook verstoord, dan zal dit effect hebben op de rest van het lichaam waardoor een groot aantal klachten kan ontstaan.', 
            'procedure' => ': Een lumbostaat kan voorgeschreven worden door elke arts, ook een huisarts. Deze wordt door een erkende bandagist nauwkeurig opgemeten en volledig op maat vervaardigd. De hernieuwingstermijn is jaarlijks tot de leeftijd van 14 jaar, tweejaarlijks tot de leeftijd van 21 jaar. Vanaf 21 jaar kan de lumbostaat alle 4 jaar hernieuwd worden.',
            'type_agency_id' => 2],
            
        ];

        Device::insert($devices);
        
    }
}
