<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\TypeAgency;

class TypeAgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeagencies = [
            ['name' => 'Fod', 'description' => 'het FOD is de federale overheidsdienst die instaat voor tegemoetkomingen aan personen met een handicap. Om hiervoor in aanmerking te komen moet de handicap eerst door het FOD herkend worden. Voor tegemoetkomingen spelen ook een aantal andere voorwaarden een rol, zoals het inkomen dat onder een bepaalde grens dient te liggen. 
            Daarnaast kan je bij het FOD ook terecht voor de erkenning van de handicap. Dit attest kan het recht op sociale voordelen openen onder bepaalde voorwaarden. 
            De aanvraag wordt online ingediend op My Handicap. 
            http://handicap.belgium.be/nl/erkenning-handicap/procedure-erkenning.htm
            Hierbij dient men in te loggen met de identiteitskaart. Men kan deze aanvraag zelf invullen of hulp vragen aan de sociale dienst van het ziekenfonds, gemeente, ocmw,... 
            Het FOD gaat na of iemand recht heeft op een erkenning of tegemoetkoming. Daarvoor worden in eerste instantie gegevens opgevraagd aan de behandelende arts. Daarna wordt men uitgenodigd voor een bezoek aan een arts van de DG personen met een handicap.
            De beslissing wordt per brief meegedeeld. Hierbij staat ook vermeld waar men eventueel bijkomend recht op heeft. Een handicap kan zowel voor een specifieke periode als voor onbepaalde duur erkend worden. 
            Indien men niet akkoord is met de beslissing kan men binnen de termijn van drie maanden na de datum van kennisgeving in beroep gaan bij de bevoegde arbeidsrechtbank. De procedure daarvoor staat vermeld op de brief bij de beslissing. 
            ', 'country_id' => 1],
            

            ['name' => 'Riziv', 'description' => 'Het RIZIV staat in voor de gedeeltelijke vergoeding van medische kosten en de betaling van uitkeringen in geval van arbeidsongeschiktheid, moederschap, vaderschap of adoptie. De terugbetaling of tegemoetkoming gebeurt via het ziekenfonds waarbij men is aangesloten. 
            Het RIZIV is bij de eerder genoemde instanties het buitenbeentje, aangezien zij een handicap niet erkennen. Naargelang de tegemoetkoming is de diagnose, een attest van de behandelende geneesheer (-specialist) of de erkenning van het FOD nodig om de hulp te kunnen aanvragen. ', 'country_id' => 1],
            
            ['name' => 'Vaph', 'description' => 'Om te kunnen genieten van tussenkomst van het VAPH  dient de handicap door hun erkend te worden. Onder handicap verstaat men:  "Elk langdurig en belangrijk participatieprobleem van een persoon dat te wijten is aan het samenspel tussen functiestoornissen van mentale, psychische, lichamelijke of zintuiglijke aard, beperkingen bij het uitvoeren van activiteiten en persoonlijke en externe factoren." 
            Het VAPH biedt tegemoetkomingen aan voor personen met een handicap om hun zorg en ondersteuning op maat te financieren.  Een erkenning van de handicap hangt altijd samen met een bepaalde steun door het VAPH. Men kan geen hulp van het VAPH krijgen zonder de erkenning van de handicap door het VAPH, maar omgekeerd kan men ook geen erkenning krijgen zonder hulpvraag. 
            De aanvraag gebeurt via een door het VAPH erkend multidisciplinair team.  Deze teams staan niet op zichzelf, maar maken deel uit van grotere organisaties, zoals de diensten maatschappelijk werk van het ziekenfonds.  Bij de behandeling wordt in eerste instantie getoetst of de aanvrager beantwoordt aan de definitie van handicap. Daarna wordt de vraag tot hulp bekeken. 
            Na behandeling van het dossier door de provinciale evaluatiecommissie  wordt in eerste instantie een  voornemen (= voorlopige beslissing) genomen. Indien men niet akkoord is met dit voornemen kan men een tweede onderzoek aanvragen door binnen de dertig dagen na ontvangst van dit voornemen een verzoek tot heroverweging in te dienen. Een heroverweging kan aangevraagd worden voor een deel van of het volledige voornemen en dient door de aanvrager gemotiveerd te worden en eventueel aangevuld met bijkomende verslagen of brieven. 
            Indien geen verzoek tot heroverweging binnen de termijn wordt bezorgd, dan volgt de definitieve beslissing.
            Een verzoek tot heroverweging wordt behandeld door een aparte commissie, de heroverwegingscommissie (HOC). Deze kan de handicap volledig opnieuw onderzoeken en adviseren. Het advies wordt bezorgd aan het VAPH die dan de definitieve beslissing maakt en doorstuurt naar de aanvrager. De voorziene tijd hiervoor is twee maanden. 
            Indien de aanvrager niet akkoord gaat met de definitieve beslissing, kan hij/zij nog altijd beroep aantekenen bij de arbeidsrechtbank van het gerechtelijk arrondissement van de woonplaats. De hiervoor te volgen procedure staat beschreven in de beslissingsbrief van het VAPH.
            Elke beslissing van het VAPH is gebaseerd op de persoonlijke situatie op het ogenblik van de aanvraag. Wanneer de situatie wijzigt geldt de beslissing niet automatisch in de nieuwe situatie.  Een voorbeeld is het recht op tegemoetkoming voor aanpassingen aan een woning. Wanneer men verhuist, zal het VAPH onderzoeken of hun vorige beslissing nog geheel of gedeeltelijk geldig blijft. 
            ', 'country_id' => 1],

            ['name' => 'VDAB', 'description' => 'Er is sprake van een arbeidshandicap. Dit wordt omschreven als een aandoening van psychische, lichamelijke of zintuiglijke aard waardoor je het moeilijk hebt om werk te vinden of om je job uit te oefenen. 
            Om recht te hebben op tegemoetkomingen van de VDAB dient men als werknemer aan één van een aantal mogelijke voorwaarden te voldoen of kan de VDAB zelf, op basis van een uitgebreid onderzoek, beslissen dat men in aanmerking komt. De voorwaarde die in het kader van EDS het meest toepasselijk is, is een erkenning door het FOD met een minimum van 7 punten op de zelfredzaamheidsschaal.
            ', 'country_id' => 1],

            ['name' => 'Hulp thuis', 'description' => 'Wie in zijn thuissituatie vanuit een bepaalde zorgbehoefte nood heeft aan hulp, kan beroep doen op ondersteuning op het vlak van gezinszorg en aanvullende thuiszorg. Hiervoor is geen erkenning van de handicap noodzakelijk. Ook wie door omstandigheden tijdelijk hulp nodig heeft kan hiervan gebruik maken.
            Aan de hand van een sociaal onderzoek ter plaatse wordt bepaald welke hulp en hoeveel hulp nodig is. Hierbij wordt gekeken naar de zorgbehoefte, de familiale en sociale situatie, de woonsituatie en de reeds aanwezige hulp van een mantelzorger of een professionele hulpverlener. Dit onderzoek wordt jaarlijks herhaald zodat men mee kan evolueren met de nood aan hulp. 
            ', 'country_id' => 1],




            

            ['name' => 'WMO', 'description' => 'WMO', 'country_id' => 2]

        ];

        TypeAgency::insert($typeagencies);
    }
}
