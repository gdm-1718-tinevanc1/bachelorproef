<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Right;

class RightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rights = [
            ['name' => 'arbeidsongeschiktheidsuitkering/invaliditeitsuitkering', 'description' => 'Wie door een ziekte of een ongeval niet meer kan werken, heeft recht op een arbeidsongeschiktheidsuitkering. Om daarvoor in aanmerking te komen moet men 180 dagen gewerkt hebben (800 uren voor wie deeltijds werkt) en een wachttijd doorlopen van 12 maanden. 
            De periode van arbeidsongeschiktheid wordt door de behandelende arts ingevuld op het getuigschrift van arbeidsongeschiktheid. De adviserende arts van het ziekenfonds kan deze data aanvaarden of de einddatum op basis van een medisch onderzoek aanpassen. 
            Na de periode van één jaar kan de adviserende geneesheer een voorstel doen aan de geneeskundige raad voor invaliditeit om de arbeidsongeschiktheid te verlengen. 
            Het RIZIV beschouwt iemand als een invalide persoon zodra men omwille van een lichamelijk letsel langer dan een jaar arbeidsongeschikt is. Tijdens deze arbeidsongeschiktheid krijgt men een invaliditeitsuitkering. Deze uitkering wordt betaald door het ziekenfonds en wordt berekend volgens bepaalde regels.  
            Zowel zelfstandigen als werknemers kunnen een gedeeltelijke hervatting van de beroepsactiviteit combineren met (een deel van) de arbeidsongeschiktheidsuitkering. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'tegemoetkoming voor hulp van derden', 'description' => 'Het ziekenfonds kan een tegemoetkoming voor hulp van derden toekennen als men moeilijkheden heeft om gewone dagelijkse handelingen uit te voeren en men aanspraak kan maken op een arbeidsongeschiktheidsuitkering.  Ze wordt samen uitbetaald met de arbeidsongeschiktheidsuitkering en is een forfaitair bedrag per dag, zes dagen per week. De adviserende arts bepaald de graad van behoefte aan hulp op basis van de volgende activiteiten:
                - zich verplaatsen
                - eten en maaltijden bereiden
                - persoonlijke hygiëne en zich kleden
                - onderhoud woning en huishoudelijke taken
                - zonder toezicht kunnen leven, zich bewust zijn van gevaar en gevaar kunnen vermijden
                - communicatie en sociale contacten
                Voor elke activiteit kan een score van 0 tot 3 punten toegekend worden. Er is sprake van behoefte aan hulp van derden bij een score van minimum 11 punten. 
                ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'verhoogde tegemoetkoming', 'description' => 'Bij een verhoogde tegemoetkoming zijn raadplegingen, geneesmiddelen, hospitalisatie, kinesitherapie,... goedkoper. Een verhoogde tegemoetkoming kan door iedereen aangevraagd worden en wordt toegekend wanneer het inkomen een bepaalde drempel niet overschrijdt. Personen met een handicap, die een toelage krijgen van het FOD, hebben automatisch recht op de verhoogde tegemoetkoming. 
            Wie geniet van een verhoogde tegemoetkoming kan een kortingskaart voor de trein (NMBS) verkrijgen. Op vertoon van deze kaart krijgt men een korting van 50% op een biljet in de tweede klas. Deze verminderingskaart geeft ook recht op 50% vermindering bij aankoop van een Lijnkaart, en een stevige vermindering bij de aankoop van een Buzzy Pass. Ze geldt niet bij de aankoop van een busticket. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'forfait voor de chronische zieken inzake gezondheidszorgen', 'description' => 'Dit is een tegemoetkoming voor bepaalde erkende chronische zieken die sterk afhankelijk zijn van hulp van anderen. 
            Drie categorieën worden beschouwd als chronisch ziek.
            Een eerste categorie omvat de personen die kinesitherapie E-pathologie toegekend zijn gedurende minstens 6 maanden, maar ook de kinderen met een toeslag op de kinderbijslag omwille van een handicap en kinderen die meer dan 120 dagen of meer dan 6 keer per jaar in het ziekenhuis opgenomen waren in het jaar van aanvraag en het jaar daarop voorafgaand.
            De tweede categorie zijn de personen met een erkenning vermindering zelfredzaamheid door het FOD van minstens 12 punten  en personen met een invaliditeitsuitkering en recht op een tegemoetkoming hulp aan derden.
            De derde categorie zijn personen die in aanmerking komen voor langdurige intensieve thuisverpleging. 
            Aangezien het ziekenfonds steeds beschikt over de nodige gegevens wordt dit automatisch uitbetaald. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'voorkeurstarief voor kinesitherapie ', 'description' => 'Op basis van de diagnose EDS kan via het ziekenfonds de zogenoemde e-pathologie voor kinesitherapie aangevraagd worden.  Hierdoor worden meer zittingen terugbetaald en geniet men van een hogere terugbetaling per beurt.  Het aantal behandelingen met terugbetaling is onbeperkt, zolang dit aantal niet hoger is dan één behandeling per dag.
            De aanvraag gebeurt door de behandelende geneesheer(-specialist), eventueel met medewerking van de kinesitherapeut, en wordt behandeld door de adviserende geneesheer van het ziekenfonds.  Een akkoord kan voor maximum 3 jaar gegeven worden.  Deze periode kan telkens verlengd worden met een nieuwe periode van maximum 3 jaar, door een nieuwe aanvraag. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'tegemoetkoming als chronisch pijnpatiënt', 'description' => 'Iemand wordt als chronisch pijnpatiënt beschouwd als na een curatieve behandeling de pijn minstens drie maanden continu blijft aanhouden.  De aanvraag kan gebeuren door de behandelende huisarts. 
            Er is een tegemoetkoming van 20% in de prijs van bepaalde pijnstillers zoals paracetamol. De behandelende arts vult hiervoor een aanvraag in die bezorgd wordt aan het ziekenfonds. De adviserende arts levert een machtiging af.  Het tonen van de machtiging aan de apotheker is voldoende om de prijsverlaging te bekomen. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'tussenkomst bij mobiliteitshulpmiddelen', 'description' => 'Mobiliteitshulpmiddelen zijn alle hulpmiddelen  voor personen  met een beperkte mobiliteit die de ziekenfondsen geheel of gedeeltelijk terug betalen. Rolstoelen zijn de meest gekende.  De aanvraag gebeurt via een bandagist. 
            Voor sommige hulpmiddelen is een verslag vereist van een multidisciplinair team dat het functioneren van de patiënt beschrijft  op verschillende vlakken.  Kennis van het team op vlak van EDS is hierbij wel aan te raden.', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'terugbetaling van niet-implanteerbare medische hulpmiddelen', 'description' => 'Er is een tegemoetkoming voorzien voor op maat gemaakte steunzolen, op voorwaarde dat deze gemaakt worden bij een geconventioneerde bandagist of orthopedist. De steunzolen dienen voorgeschreven te zijn door een geneesheer-specialist. Ze dienen te voldoen aan een aantal kwaliteitscriteria en vervaardigd te zijn uit materiaal dat door het Riziv is voorgeschreven. Ook een podoloog kan steunzolen afleveren, maar dan is geen tegemoetkoming mogelijk. 
            Er wordt een vast bedrag per zool terugbetaald.  Deze terugbetaling gebeurt na het bezorgen van het voorschrift en bewijs van aflevering van de steunzolen aan het ziekenfonds. 
            Tot de leeftijd van 18 jaar kan jaarlijks een nieuw paar steunzolen met tussenkomst verkregen worden, mits voorschrift van een geneesheer-specialist. Vanaf 18 jaar is dit om de twee jaar. 
            Ook orthopedische schoenen dienen voorgeschreven te worden door een geneesheer-specialist. Daarbij is een duidelijke vermelding van de aandoening belangrijk. De erkende orthopedist dient een aanvraag in bij het ziekenfonds. Bij een eerste aanvraag wordt men opgeroepen voor een controleonderzoek bij de adviserende geneesheer.   
            Naar gelang van de ernst van de aandoening betaalt men een vast bedrag, dat door het RIZIV wordt vastgelegd. Het overblijvende bedrag wordt rechtstreeks vergoed aan de verstrekker van de schoenen.  
            Tot de leeftijd van 18 jaar heeft men elke 9 maanden recht op een paar orthopedische schoenen. Vanaf 18 tot 65 jaar is dit jaarlijks. Vanaf 66 jaar is een hernieuwing om de twee jaar van toepassing.  ', 
            'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'tussenkomst bij orthesen', 'description' => 'Omwille van de gewrichtsinstabiliteit en de daaruit voortvloeiende klachten worden vaak ortheses voorgeschreven.  Mits het voorschrift van een geneesheer-specialist is er recht op tussenkomst. De uiteindelijke kostprijs hangt af van het type orthese. 
            De termijn van hernieuwing is afhankelijk van het soort orthese. Bij maatwerk, zoals bijvoorbeeld silversplints, is dit tot de leeftijd van 14 jaar jaarlijks, tussen 14 en 21 jaar tweejaarlijks, en vanaf 21 jaar is de termijn vijf jaarlijks.  Voor prefab orthesen, zoals bepaalde pols- of knie-ortheses is de termijn 1 jaar tot de leeftijd van 21 jaar en daarna wordt het om de drie jaar. 
            ', 'type_agency_id' => 2, 'country_id' => 1],
            ['name' => 'terugbetaling thuisverpleging', 'description' => 'Soms kan het gebeuren dat men tijdelijk of permanent bijkomende persoonlijke zorg nodig heeft. Zelfstandige thuisverpleegsters kunnen zowel instaan voor hygiënische zorg als voor verpleegkundige zorg. Voor alle verpleegkundige handelingen is een doktersvoorschrift nodig.  
            Prestaties inzake thuisverpleging worden vergoed via derdebetaler. De verpleegkundigen doen daarvoor zelf de nodige administratie en aanvraag. Door de regeling derdebetaler betaalt de patiënt enkel het eventuele remgeld. 
            ', 'type_agency_id' => 2, 'country_id' => 1],



            ['name' => 'het persoonsvolgend budget', 'description' => 'Het persoonsvolgend budget is een budget dat iemand met een beperking uit Vlaanderen kan krijgen voor ondersteuning, zorg en persoonlijke assistentie. Aangezien de beperking bij mensen met EDS normaal gezien niet ernstig genoeg is om van een persoonsvolgend budget te kunnen genieten, wordt dit hier niet verder behandeld.
            ', 'type_agency_id' => 3, 'country_id' => 1],
            ['name' => 'hulpmiddelen en aanpassingen', 'description' => 'Een heel belangrijk steunmogelijkheid van het VAPH zijn de tegemoetkomingen voor hulpmiddelen en aanpassingen. Dit kunnen onder andere zijn: herstelkosten aan een elektronische rolstoel, een tweede manuele rolstoel, traplift, tripplestoel, aangepaste bureaustoel, ...  
            Een overzicht is terug te vinden op de website van het VAPH. 
            https://www.vaph.be/refertelijst
            Voor elk hulpmiddel staat zowel het refertebedrag als de refertetermijn vermeld. Het refertebedrag is het maximale bedrag van de tegemoetkoming. Kost het hulpmiddel meer, dan dient de meerkost met eigen middelen betaald te worden. De refertetermijn is de termijn waarbinnen geen nieuwe aanvraag voor hetzelfde hulpmiddel mogelijk is en komt overeen met de gemiddelde levensduur van het hulpmiddel. 
            Ook aanpassingen aan een wagen in functie van de beperking komen in aanmerking voor steun via het VAPH. Deze aanvragen gebeuren via CARA. CARA is een onderdeel  van Vias institute, het vroegere Belgisch Instituut voor de Verkeersveiligheid, dat specifiek werkt rond het veilig in het verkeer brengen van mensen met een beperking. CARA staat in voor een rijgeschiktheidsonderzoek en beslist of er aanpassingen nodig zijn aan het voertuig en/of er beperkingen gelden op het gebruik van het op dat ogenblik geldende rijbewijs.             
            ', 'type_agency_id' => 3, 'country_id' => 1],
            ['name' => 'bijkomende voordelen erkenning', 'description' => 'De goedkeuring van het VAPH heeft automatisch recht op een gratis netabonnement van De Lijn wanneer men in het Vlaamse Gewest woont.
            De erkenning van het VAPH opent het recht op de aankoop van meer dienstencheques (2000 in plaats van 500). Hiervoor vraagt men een attest aan bij het VAPH en bezorgt men dit aan de firma die de dienstencheques uitgeeft. Ook bij een erkenning van het FOD met een toekenning van minstens 7 punten op de zelfredzaamheidsschaal verkrijgt men hetzelfde recht.
            Een erkenning door het VAPH of FOD heeft recht op de European Disability Card. Men kan deze gratis aanvragen. Op vertoon van deze kaart kunnen kortingen en/of andere voordelen toegekend worden bij de deelnemende organisaties in de sector van cultuur, sport en vrijetijd.  Door middel van een label kunnen deze organisaties zich kenbaar maken. 
            De EDC is een Europees project en de kaart is dan ook bruikbaar in een aantal andere Europese landen. 
            ', 'type_agency_id' => 3, 'country_id' => 1],


            ['name' => 'verhoogde kinderbijslag', 'description' => 'De verhoogde kinderbijslag is een bijkomend bedrag bij de gewone kinderbijslag dat uitbetaald wordt aan ouders van een kind tussen 0 en 21 jaar met een handicap of aandoening, indien dit kind recht heeft op de gewone kinderbijslag. Het dient om een deel van de meerkosten te helpen dragen die ouders hebben bij een kind met een handicap. Vanaf 21 jaar vervalt het recht op deze verhoging, ook al heeft het kind nog recht op kinderbijslag. In bepaalde gevallen kan dan het recht op een inkomensvervangende en/of integratie- tegemoetkoming geopend worden. 
            De aanvraag gebeurt in eerste instantie via het kinderbijslagfonds. Pas na hun uitnodiging kan de aanvraag ingediend worden bij het FOD. 
            De beoordeling gebeurt op basis van drie pijlers. 
            Pijler één bepaalt de ernst van de lichamelijke of psychische gevolgen van de handicap. De beoordeling gebeurt op basis van de officiële Belgische schaal voor invaliditeit aangevuld met de lijst van pediatrische aandoeningen.  
            Pijler twee bekijkt de gevolgen op het dagelijkse leven voor het kind. Dit gaat om de gevolgen op gebied van zelfzorg, opleiding, sociale integratie, communicatie, mobiliteit,...
            Pijler drie omvat de gevolgen en de extra inspanningen voor de familiale omgeving van het kind. Deze omvatten de invloed van behandelingen, verplaatsingen op het gezin en de aanpassingen voor het gezin. 
            Het bedrag van de toelage is afhankelijk van het aantal toegekende punten. Om recht te hebben op de verhoogde kinderbijslag heeft men minstens 4 punten nodig in pijler 1, of minstens 6 punten over de drie pijlers samen. De punten van de derde pijler tellen dubbel.
            Het kinderbijslagfonds betaalt, na erkenning van de handicap door het FOD, de toeslag uit. 
            Meer info en actuele bedragen vind je op:
            http://vlaanderen.famifed.be/nl/gezinnen/kinderbijslagen-en-toeslagen/toeslag-voor-kinderen-met-een-handicap-aandoening
            ', 'type_agency_id' => 1, 'country_id' => 1],
            ['name' => 'inkomensvervangende tegemoetkoming', 'description' => 'Een inkomensvervangende tegemoetkoming kan eventueel verkregen worden wanneer het verdienvermogen met minstens 2/3 verminderd is. Het verdienvermogen heeft niets te maken met het aantal uren dat gewerkt kan worden, maar is datgene wat een gezond persoon op de algemene arbeidsmarkt kan verdienen. Voor deze tegemoetkoming moet men minstens 21 jaar zijn. 
            Het maximumbedrag is in eerste instantie afhankelijk van de gezinscategorie waartoe men behoort. Er zijn drie categoriën:
            categorie A: je woont samen met familieleden (bloed- en aanverwanten)
            categorie B: je woon alleen
            categorie C: je hebt een partner, kinderen ten laste.
            Het maximumbedrag stijgt naarmate de categorie van A naar C. De huidige maximumbedragen kan je terug vinden op 
            https://www.vfg.be/inkomen-armoede/Pages/Bedragen.aspx
            Daarnaast wordt rekening gehouden met het bruto belastbaar inkomen van het huishouden. Van het maximumbedrag worden niet-vrijgestelde bestaansmiddelen afgetrokken. Het bedrag waarop je recht hebt kan berekend worden via de simulatietool op de website van het FOD:
            http://handicap.belgium.be/nl/mijn-rechten/inkomensvervangende-tegemoetkoming.htm 
            ', 'type_agency_id' => 1, 'country_id' => 1],
            ['name' => 'integratietegemoetkoming ', 'description' => 'Deze tegemoetkoming wordt toegekend aan wie bijkomende kosten heeft om zich aan het maatschappelijk leven aan te passen omwille van een lagere zelfredzaamheid. Men kan deze verkrijgen vanaf de leeftijd van 21 jaar. 
            Voor de beoordeling van de handicap gaat men de invloed van handicap na op het dagelijkse leven. Men beoordeelt aldus de "zelfredzaamheid" van de persoon met een handicap en dit op de volgende zes domeinen:
            1. zich verplaatsen
            2. eten bereiden en eten
            3. zich verzorgen en aankleden
            4. onderhoud woning en huishoudelijke activiteiten
            5. gevaar inschatten en vermijden
            6. contacten onderhouden met andere personen
            Per criterium kan men maximaal 3 punten krijgen:
            - 0 punten = geen moeilijkheden
            - 1 punt = weinig moeilijkheden
            - 2 punten = grote moeilijkheden
            - 3 punten = onmogelijk zonder hulp
            De grootte van de uitkering wordt bepaald door het aantal punten. Hoe hoger het aantal punten, hoe groter de tegemoetkoming. Men onderscheidt 5 categorieën. Minder dan 7 punten heeft geen recht op een uitkering. 
            - categorie 1 (7-8ptn)
            - categorie 2 (9-11ptn)
            - categorie 3 (12-14ptn)
            - categorie 4 (15-16ptn)
            - categorie 5 (17-19ptn)
            De recente maximum bedragen vind je terug op 
            https://www.vfg.be/inkomen-armoede/Pages/Bedragen.aspx
            Daarnaast wordt rekening gehouden met het bruto belastbaar inkomen van de persoon met een handicap en zijn eventuele partner. Het uiteindelijke bedrag kan van persoon tot persoon erg verschillen. Op de website van het FOD is een simulatietool terug te vinden:
            http://handicap.belgium.be/nl/mijn-rechten/integratietegemoetkoming.htm
            Indien, omwille van het inkomen, er geen recht is op integratietegemoetkoming, kan het attest inzake zelfredzaamheid, zoals hierboven beoordeeld, wel het recht openen op eventuele andere voordelen. 
            ', 'type_agency_id' => 1, 'country_id' => 1],
            ['name' => 'parkeerkaart', 'description' => 'Het FOD levert ook parkeerkaarten af voor personen die omwille van hun handicap ernstige moeilijkheden hebben om zich te verplaatsen. Die persoon kan zowel als passagier of als bestuurder in het voertuig aanwezig zijn. De kaart is persoonlijk en mag niet gebruikt worden als de persoon zelf niet in het voertuig zit.
            Er zijn verschillende categorieën die recht hebben op een parkeerkaart. Voor iemand met EDS zijn de meest voor de hand liggende:
            - verminderde zelfredzaamheid 12 punten of minstens 2 punten op mobiliteit vanaf 21 jaar
            - minstens 2 punten in de categorie "verplaatsing" of "mobiliteit en verplaatsing" indien jonger dan 21 jaar
            - goedkeuring van de adviserende arts voor de aanschaf van een mobiliteitshulpmiddel dat op een specifieke lijst voorkomt. Op deze lijst staan de rolstoelen voor gebruikers die voor alle verplaatsingen aangewezen zijn op een rolstoel. Duwwagens, driewielfietsen en scooters komen niet voor op die lijst.  Bij de goedkeuring van het hulpmiddel ontvangt men ook een attest en een aanvraagformulier om een parkeerkaart aan te vragen via een verkorte procedure. Hierbij is geen geneeskundig onderzoek meer vereist. 
            Een kaart kan voor een beperkte periode of voor onbepaalde duur afgeleverd worden. Een kaart van bepaalde duur wordt niet automatisch verlengd. 6 maanden voor het vervallen van de kaart kan een nieuwe aangevraagd worden. 
            Bij verlies, diefstal of schade kan men een nieuwe kaart aanvragen, met een nieuw nummer. De oude kaart wordt dan geblokkeerd.
            Een beschadigde kaart dient teruggestuurd te worden. Dit geldt ook voor elke parkeerkaart bij het overlijden van de desbetreffende persoon. 
            ', 'type_agency_id' => 1, 'country_id' => 1],
            ['name' => 'verschillende sociale en fiscale voordelen', 'description' => 'De kaart kosteloze begeleider: 
            Deze kaart kan aangevraagd worden bij een vermindering van de zelfredzaamheid van minstens 12 punten, een blijvende invaliditeit van minstens 80% of een blijvende invaliditeit rechtstreeks toe te schrijven aan de onderste ledematen die minstens 50% bedraagt. De persoon met een handicap moet een geldig vervoerbewijs hebben, de begeleider reist gratis.  De kaart kosteloze begeleider is ook geldig bij De Lijn.
            Vermindering BTW autovoertuigen, vrijstelling verkeersbelasting en belasting inverkeersstelling:
            Hiervan kan men genieten bij een blijvende invaliditeit van 50% rechtstreeks te wijten aan de onderste ledematen. Dit invaliditeitsattest wordt afgeleverd door het FOD. De kans om dit attest te bekomen bij EDS is beperkt, zelfs bij volledige afhankelijkheid van de rolstoel. Heel wat controleartsen kennen dit enkel toe bij verlamming of amputatie van minstens één van de onderste ledematen. Voor wie dit verder wil uitpluizen om de kans in te schatten, geven we de link naar de desbetreffende wettekst: http://www.ejustice.just.fgov.be/cgi_loi/change_lg.pl?language=nl&la=N&cn=2006020831&table_name=wet
            Let wel op! De wagen mag in dit geval enkel gebruikt worden voor het persoonlijk vervoer van de persoon met de handicap.
            Inkomensbelasting en onroerende voorheffing:
            Voor een toeslag op de belastingvrije som inzake personenbelasting en een vermindering van de onroerende voorheffing, dient met een erkenning te hebben als persoon met een handicap, met een vermindering van het verdienvermogen tot maximum 1/3 en/of 9 punten verminderde zelfredzaamheid. Het attest wordt door het FOD rechtstreeks elektronisch bezorgd.
            vermindering successierechten:
            Op voorwaarde dat de laatste fiscale woonplaats van de overledenen zich in het Vlaams Gewest bevindt, kan een persoon met een handicap een vermindering van de successierechten krijgen. Men dient hiervoor een erkenning te hebben als persoon met een handicap, met een vermindering van het verdienvermogen tot maximum 1/3 en/of 9 punten verminderde zelfredzaamheid. Daarnaast moet men ook een tegemoetkoming ontvangen. Ook dit attest wordt door het FOD rechtstreeks elektronisch bezorgd.  
            vrijstelling heffing op waterverontreiniging:
            Wie een inkomensvervangende tegemoetkoming of de integratietegemoetkoming ontvangt moet de bovengemeentelijke saneringsbijdrage vermeld op de waterfactuur of de heffing op de waterverontreiniging niet betalen. Deze maatregel geldt alleen in Vlaanderen. Deze vrijstelling krijg je automatisch aangezien het attest door het FOD rechtstreeks elektronisch wordt bezorgd.
            Sociaal tarief voor telefoon, GSM en internet:
            Men heeft recht op lagere aansluitkosten, een korting op het abonnementsgeld en op de gesprekskosten bij tenminste 9 punten vermindering zelfredzaamheid, indien het bruto gezinsinkomen een bepaalde grens niet overschrijdt.
            Sociaal tarief gas en elektriciteit:
            Onder andere wie een tegemoetkoming krijgt van het FOD, kan recht hebben op het sociaal tarief gas en elektriciteit. Dit wordt automatisch toegekend op basis van de gegevens gekend bij de federale overheid.   
            recht op de aankoop van meer dienstencheques:
            Bij een erkenning van het FOD met een toekenning van minstens 7 punten op de zelfredzaamheidsschaal verkrijgt men het recht om 2000 dienstencheques per jaar aan te kopen in plaats van 500.
            European Disability Card :
            Een erkenning door het VAPH of FOD heeft recht op de European Disability Card. Men kan deze gratis aanvragen. Op vertoon van deze kaart kunnen kortingen en/of andere voordelen toegekend worden bij de deelnemende organisaties in de sector van cultuur, sport en vrijetijd.  Door middel van een label kunnen deze organisaties zich kenbaar maken. 
            De EDC is een Europees project en de kaart is dan ook bruikbaar in een aantal andere Europese landen. 
            ', 'type_agency_id' => 1, 'country_id' => 1],


            ['name' => 'Tegemoetkoming in de kosten van een arbeidspostaanpassing', 'description' => 'Onder arbeidspost verstaat men alles wat in een bedrijf niet kan verplaatst worden. Indien deze dient aangepast te worden aan de medewerker met een arbeidshandicap, betaalt de VDAB de aankoop en de installatie van het materiaal terug. Voorbeelden zijn: een traplift, een hellend vlak voor een rolstoelgebruiker, aangepast sanitair,... Indien het gaat om een aangepast model van materiaal dat normaal ook in het bedrijf aanwezig is, wordt enkel het verschil in prijs tussen het aangepast materiaal en het gebruikelijke materiaal terug betaald. 
            Er zijn wel een aantal voorwaarden aan de tegemoetkoming verbonden en de aanpassing mag slechts  gebeuren na goedkeuring. 
            De werknemer met een handicap kan ook zelf arbeidsgereedschap of -kledij kopen. Bijvoorbeeld: een speciale bureaustoel. Het is de werknemer zelf die eigenaar wordt en de VDAB betaalt de kosten terug. 
            ', 'type_agency_id' => 4, 'country_id' => 1],
            ['name' => 'VOP (Vlaamse ondersteuningspremie voor werkgevers)', 'description' => 'Werkgevers kunnen een ondersteuningspremie ontvangen indien de arbeidshandicap een impact heeft op het functioneren van de werkgever. De premie wordt goedgekeurd voor een periode van vijf jaar en kan per vijf jaar verlengd worden, zolang de werknemer bij de werkgever in dienst blijft. De hoogte van de premie wordt berekend op basis van het loon en de datum waarop de werknemer in dienst genomen werd. 
            Wanneer de VOP goedgekeurd werd kan in zeer specifieke en uitzonderlijke gevallen een verhoging van de premie aangevraagd worden tot maximaal 60% van het loon van de werknemer. 
            Mogelijke toepassingen van de VOP-premie zijn:
            - aanpassingen aan het uurrooster
            - aanpassingen van het takenpakket
            - veelvuldige afwezigheid omwille van de handicap
            - rendementsverlies
            - meer begeleiding en ondersteuning van de rechtstreeks verantwoordelijken
            De maatregel is niet geldig voor werknemers bij de overheid. Indien men recht heeft op meerdere premies dient nagegaan te worden of deze onderling cumuleerbaar zijn.
            ', 'type_agency_id' => 4, 'country_id' => 1],
            ['name' => 'begeleiding op de werkvloer', 'description' => 'Vanuit de VDAB kan een werknemer met een handicap ook begeleid worden. Dit onder de vorm van jobcoaching of een gespecialiseerde IBO. ', 'type_agency_id' => 4, 'country_id' => 1],
            

            ['name' => 'gezinszorg', 'description' => 'Men onderscheidt enerzijds gezinszorg. Dit omvat persoonsverzorging, hulp in het huishouden, pychosociale ondersteuning en in beperkte mate ook hulp bij het schoonmaken van het huis. Hiervoor wordt een bijdrage per uur gerekend, afhankelijk van de zorgvraag en het inkomen. Alle diensten voor gezinszorg passen hetzelfde berekeningssysteem toe. Sommige ziekenfondsen geven een bijkomende tegemoetkoming indien de dienst door hen erkend is. ', 'type_agency_id' => 5, 'country_id' => 1],
            ['name' => 'thuiszorg', 'description' => 'Daarnaast is er ook mogelijkheid tot aanvullende thuiszorg. Dit zijn diensten zoals de poetsdienst, oppashulp, hulp bij kleine karweien,.... Ook hier bepaalt men een bijdrage per uur. Elke dienst is vrij om die bijdrage vast te leggen. Men dient wel rekening te houden met het inkomen en de gezinssamenstelling.', 'type_agency_id' => 5, 'country_id' => 1],
        ];

        Right::insert($rights);
    }
}
