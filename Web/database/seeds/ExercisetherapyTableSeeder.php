<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Exercisetherapy;

class ExercisetherapyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $exercisetherapy = [
            ['text' => 'Vermijdt grote impacten ter hoogte van instabiele gewrichten (bv. sprongen, plyometrische oefeningen, lopen), grote krachtsinwerkingen (bv. zware gewichten laten schieten) ', 'right' => 2, 'type_exercisetherapy_id' => 1],
            ['text' => 'Vermijdt een externe belasting (gewicht, grote weerstand, snelheid, ...) in de ‘end-range’ van de bewegingsbaan van instabiele gewrichten. ', 'right' => 2, 'type_exercisetherapy_id' => 1],
            ['text' => 'Vermijdt oefeningen in open keten, zeker onder externe belasting (gewicht, grote weerstand, snelheid) bij instabiliteit van de schouders of heupen. ', 'right' => 2, 'type_exercisetherapy_id' => 1],
            ['text' => 'Vermijdt grote bewegingsamplitudos indien de patiënt blokkages of pijn vermeldt. In de afbeelding hieronder wordt in gesloten keten gewerkt voor de schouder (op zich positief), maar het bewegingsamplitudo is erg groot (volledige elevatie), waardoor de patiënt een blokkagegevoel en plotse pijn ervaart. ', 'right' => 2, 'type_exercisetherapy_id' => 1],
            ['text' => 'Focus de therapie op het verkrijgen van controle en evenwicht in de ‘mid-range’ van de bewegingsbaan, zonder het optreden van bewegingsfouten (hyperextensie knie, rotatie lumbaal, afzakken van het bekken, mediale deviatie van de knie, ….).', 'right' => 1, 'type_exercisetherapy_id' => 1],
            ['text' => 'Gebruik indien nodig ‘approximatie’: Als de gewrichtsoppervlakken dichter naar elkaar gebracht worden, vindt minder overmatige translatie plaats en is het gewricht stabieler. ', 'right' => 1, 'type_exercisetherapy_id' => 1],


            ['text' => 'Hou de belasting, krachtsinwerkingen en snelheden bij de manuele therapie en oefeningen laag. Zorg voor een trage gecontroleerde uitvoering. Patiënten hebben gewoonlijk een verminderd lichaamsbesef en proprioceptie. Snelle uitvoering zorgt voor bewegingsfouten en pijn. ', 'right' => 1, 'type_exercisetherapy_id' => 2],
            ['text' => 'Werk bij oefeningen voornamelijk op controle (en milde kracht) in het midden van de bewegingsbaan.', 'right' => 1, 'type_exercisetherapy_id' => 2],
            ['text' => 'Vermijdt plyometrische of oefeningen ', 'right' => 2, 'type_exercisetherapy_id' => 2],
            ['text' => 'Voor het inbouwen van progressie: verhoog eerst het aantal herhalingen. Kies later pas voor een opdrijving in de weerstand. Bouw progressie later in dan bij gezonde personen. Patiënten met hypermobiliteit zijn iets kwetsbaarder voor overbelastingsletsels.', 'right' => 1, 'type_exercisetherapy_id' => 2],
            ['text' => 'Beperk het aantal oefeningen en de oefentijd. Het is beter om dagelijks 2-5 minuten te oefenen voor het belangrijkste probleem (ca 3-4 oefeningen), dan 1x om de twee weken een uur te oefenen. ', 'right' => 2, 'type_exercisetherapy_id' => 2],
            ['text' => 'Toon de oefening voor, zodat de patiënt kan inschatten of deze haalbaar is.', 'right' => 1, 'type_exercisetherapy_id' => 2],

            ['text' => 'Probeer de oefening eerst zonder externe belasting (zonder extra gewicht of weerstand). Voeg pas weerstand toe als de patiënt zowel de doorgaande als de terugkerende bewegingsbaan kan controleren. Let op voor compensaties en (sub)luxaties.', 'right' => 1, 'type_exercisetherapy_id' => 2],
            ['text' => 'Laat de patiënt zijn ervaring en angst uitspreken tijdens de uitvoering van de oefening. Vaak kunnen patiënten zelf moeilijk onderscheid maken tussen normale sensaties bij bewegen en tekenen die op irritatie of weefselschade duiden. Als regel kan men aanhouden dat een oefening niet geschikt is wanneer elke herhaling telkens meer pijn uitlokt. ', 'right' => 1, 'type_exercisetherapy_id' => 2],


            ['text' => 'Werk voornamelijk met lengtebelasting van het bot', 'right' => 1, 'type_exercisetherapy_id' => 3],
            ['text' => 'Spiermassa verhogen —› bottmassa verhoogt ', 'right' => 1, 'type_exercisetherapy_id' => 3],
            ['text' => 'Vermijdt gevaarlijke situaties (snelheden, te moeilijk niveau op vlak van evenwicht, te zware gewichten,…) waarbij de patiënt kan vallen', 'right' => 2, 'type_exercisetherapy_id' => 3],

            ['text' => 'Vermijd isometrische oefeningen, omdat deze de bloeddruk sterk verhogen. Ook plyometrische oefeningen zijn  minder geschikt. Kies voor een dynamische cyclische uitvoering aan een rustig tempo. ', 'right' => 2, 'type_exercisetherapy_id' => 4],
            ['text' => 'Ook sit-ups, push-ups en pull-ups worden afgeraden omwille van de bloeddrukstijgingen die zij veroorzaken, hoewel deze oefeningen dynamisch worden uitgevoerd (Milewicz D.M, 2005). 
            -Vermijd valsalva manoeuvers tijdens krachtsoefeningen (adem blokkeren). Laat de patiënt uitademen tijden de krachtslevering. 
            ', 'right' => 2, 'type_exercisetherapy_id' => 4],
            ['text' => 'Het monitoren van de hartfrequentie en bloeddruk is aangewezen (voor, herhaaldelijk tijdens, en na de inspanning). Men raadt aan om de hartfrequentie niet hoger te laten stijgen dan 100-110 slagen/min. ', 'right' => 1, 'type_exercisetherapy_id' => 4],
            ['text' => 'Ook de Borg-schaal kan een indruk geven over de intensiteit van de inspanning. Over het algemeen raadt men aan om matig intens te oefenen (Borg 8-11). ', 'right' => 1, 'type_exercisetherapy_id' => 4],
            
            ['text' => 'Vermijd sporten met plotse versnellingen (bv. sprint interval training). ', 'right' => 2, 'type_exercisetherapy_id' => 4],
            ['text' => 'Vermijd indien mogelijk sporten die veel abrupte starts en stops bevatten (bv. balsporten in team op competitieniveau, zoals basketbal, voetbal, volleybal). ', 'right' => 2, 'type_exercisetherapy_id' => 4],
            ['text' => 'Vermijd sporten op extreme hoogte of diepte (bv. hooggebergte, duiken), of bij extreme temperaturen. ', 'right' => 2, 'type_exercisetherapy_id' => 4],
            ['text' => 'Aangewezen sporten zijn fietsen, matig intens wandelen, zwemmen, inline skaten en schaatsen, aquasporten zoals aqua cycling, aqua jogging, aqua wandelen, ... ', 'right' => 1, 'type_exercisetherapy_id' => 4],
            ['text' => 'Competitiesport wordt over het algemeen afgeraden, omwille van de hoge eisen die aan het lichaam gesteld worden en de bijkomende emotionele stress. ', 'right' => 2, 'type_exercisetherapy_id' => 4],
        ];
        
        Exercisetherapy::insert($exercisetherapy);

    }
}
