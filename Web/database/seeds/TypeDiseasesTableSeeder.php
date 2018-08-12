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
            ['name' => 'Localised-HSD (L-HSD)', 'info' => 'hypermobiliteit in minder dan 5 gewrichten. Daarnaast zijn er 1 of meer musculoskeletale klachten aanwezig.', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
            ['name' => 'Generalised HSD (G-HSD)', 'info' => 'hypermobiliteit in vijf of meer gewrichten. 
            De hypermobiliteit wordt objectief beoordeeld (bvb door de Beighton-score). Daarnaast zijn er 1 of meer musculoskeletale klachten.  Een degelijk onderzoek is nodig om de mogelijke aanwezigheid van hEDS uit te sluiten. 
            ', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
            ['name' => 'Peripheral-HSD (P-HSD)', 'info' => 'hypermobiliteit is enkel aanwezig in handen en/of voeten
            Daarnaast zijn er 1 of meer musculoskeletale klachten aanwezig. 
            ', 'diagnose' => 'Dit is vast te stellen door een specialist op basis van een klinisch onderzoek.', 'disease_id' => 2],
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


        $eds = [
            ['name' => 'Klassieke EDS (cEDS)', 
            'info' => 'Het klassieke EDS type is vooral gekenmerkt door een rekbare en fragiele huid.', 
            'criteria' => 'De hoofdcriteria zijn  een rekbare huid, verbrede atrofische littekens (sigarettenpapier), gegeneraliseerde hypermobiliteit (Beighton > 5, eventueel in het verleden). 
            De bijkomend criteria zijn gladde fluweelachtige huid, gemakkelijke blauwe plekken, molluscoïde pseudo-tumoren, onderhuidse sferoïden, 
            inwendige breuken (hernia), epicanthal plooien, complicaties van de gewrichtshypermobiliteit (vd platvoeten, luxaties, subluxaties,...), 
            manifestaties van weefselrekbaarheid en broosheid, familiegeschiedensi van een eerste graad familielid die voldoet aan de klinische criteria 
            (overerving is autosomaal dominant).', 
            'diagnose' => 'Minimale criteria om te kunnen spreken over een vermoeden van cEDS zijn een rekbare huid en atrofische littekens. Daarnaast moet er ofwel sprake zijn van gegeneraliseerde hypermobiliteit, ofwel dient men te beantwoorden aan minstens drie bijkomende criteria. 
            Een DNA-onderzoek is noodzakelijk om tot een definitieve diagnose te komen. Hierbij wordt gezocht naar een mutatie in COL5A1,  COL5A2, COL1A1 en COL1A2 genen.
            Indien een DNA-test niet mogelijk is kan men via een huidbiopsie de klinische diagnose ondersteunen, maar niet bevestigen.', 
            'disease_id' => 3],

            ['name' => 'Klassiek-gelijkende EDS (clEDS)', 
            'info' => 'ClEDS is autosomaal recessief en daardoor een type dat heel zelden voorkomt.', 
            'criteria' => 'De hoofdcriteria zijn een rekbare fluweelzachte huid, geen atrofische littekens, gegeneraliseerde hypermobiliteit met of zonder recidiverende dislocaties (meestal schouder en enkel), kwetsbare huid, spontane kleinvlekkige bloedingen in de huid of in een slijmvlies.  
            Als bijkomende criteria onderscheiden we voetmisvormingen, oedeem in de benen zonder hartfalen, mild proximale en distale spierzwakte, axonale neuropathie, afname van de spieren in handen en voeten, oude, gerimpelde handen niet in overeenstemming met de leeftijd, hamervinger, zijwaartse verkromming van één of meer vingers of tenen (=clinodactylie), korte vinders en/of tenen (= brachydactylie), vaginale, baarmoeder of rectale verzakking,
            ', 
            'diagnose' => 'De minimale klinische criteria zijn alle hoofdcriteria en een familiegeschiedenis die duidt op een autosomaal recessieve overerving.  Bevestiging van de diagnose door een positieve DNA-test is vereist. Hierbij doet men een moleculaire analyse van de TNXB gen.', 
            'disease_id' => 3],

            ['name' => 'Cardiovalvulaire EDS  (cvEDS)', 
            'info' => 'Bij deze patiënten treden ernstige problemen op met de hartkleppen.', 
            'criteria' => 'De drie hoofdcriteria zijn ernstige progressieve cardiale valvulaire problemen (aortaklep, mitralisklep), betrokkenheid van de huid (rekbare huid, atrofische littekens, dunne huid, blauwe plekken), en hypermobiliteit, die zowel gegeneraliseerd als beperkt tot de kleine gewrichten kan voorkomen. 
            Liesbreuk, vervormd borstbeen (vooral trechterborst), luxaties en voetmisvormingen zijn bijkoimende criteria.
            ', 
            'diagnose' => 'Er is een vermoeden van cvEDS indien er sprake is van ernstige progressieve cardiale-valvulaire problemen en de familiegeschiedenis wijst op een autosomaal recessieve overerving.  Daarnaast dient ofwel een ander hoofdcriteria of minstens twee bijkomende criteria aanwezig te zijn. 
            Een definitieve diagnose kan enkel door middel van een DNA-test, dat mutaties aantoont in het COL1A2 gen. 
            ', 
            'disease_id' => 3],

            ['name' => 'Vasculaire EDS (vEDS)', 
            'info' => 'Patienten met vEDS hebben erg zwakke bloedvaten en ingewanden, waardoor deze gemakkelijk kunnen scheuren.  De meest gemelde klachten zijn het makkelijk ontwikkelen van zeer grote blauwe plekken en littekens die moeilijk genezen. De overerving is autosomaal dominant', 
            'criteria' => 'Er zijn vijf belangrijke criteria, waarbij het beantwoorden aan twee van deze duidelijk wijst op de mogelijkheid van vEDS. Deze criteria zijn een familielid die een diagnose vEDS heeft, het plots openscheuren van bloedvaten op een leeftijd jonger dan 40 jaar, spontane darmperforaties, rupturen van de baarmoeder, problemen met de halsslagader zonder voorafgaand trauma. 
            Daarnaast zijn er nog andere klinische tekens die wijzen in de richting van vEDS zoals het gemakkelijk krijgen van blauwe plekken zonder duidelijke oorzaak, een dunne, transparante en fragiele huid, typische gezichtskenmerken, spontane klaplong, oud uitziende handen op jonge leeftijd, klompvoet(en) bij de geboorte, aangeboren heupluxatie, hypermobiliteit van de kleine gewrichten, pees- en spierscheuringen, keratoconus (= kegelvorminge afwijking van het hoornvlies), terugtrekkend en overgevoelig tandvlees en vroeg spataderen (jonger dan 30 jaar, bij vrouwen geldt de bijkomende voorwaarde dat ze niet zwanger geweest zijn) De typische kenmerken van het gezicht zijn onder andere een lange, spitse neus, dunne lippen, grote prominent uitstekende ogen,....
            ', 
            'diagnose' => 'Een familiegeschiedenis die wijst op de aandoening, arteriële scheuren of dissectie bij een leeftijd jonger dan 40 jaar, onverklaarbare scheuren van het laatste eind van de dikke darm, of een spontane klaplong, eventueel in aanwezigheid van andere kenmerken, dienen steeds te leiden naar een DNA-onderzoek naar vEDS. 
            Bij vermoeden op basis van bovenstaande klinische tekenen wordt een DNA-test uitgevoerd waarbij er gezocht wordt naar een mutatie in het COL3A1 gen of het panel dat COL3A1 en COL1A1 bevat. Indien er geen bevestiging gevonden werd in het DNA sluit dit een diagnose niet uit. Er dienen alternatieve diagnoses overwogen te worden. 
            ', 
            'disease_id' => 3],

            ['name' => 'Hypermobiele EDS (hEDS)', 
            'info' => 'hEDS is het enige type bij EDS waarvan de genetische oorzaak niet gekend is. Dit doet vermoeden dat er sprake is van genetische heterogeniteit. De overerving is autosomaal dominant. ', 
            'criteria' => 'Men onderscheid drie criteria.
            Criterium 1 : gegeneraliseerde hypermobiliteit. Men gebruikt hiervoor de Beighton score. Hierbij werd, ten opzichte van de oorspronkelijk vereiste minimumscore een correctie ingevoerd om over-diagnose bij kinderen of onder-diagnose bij ouderen te vermijden, aangezien hypermobiliteit vaak afneemt met de leeftijd. Voor pre-puberale kinderen en adolescenten dient de score minstens zes te zijn, voor puberale mannen en vrouwen tot de leeftijd van 50 jaar is dit minstens vijf. Voor personen ouder dan 50 jaar is de minimum score 4 geworden. 
            Indien de Beighton Score 1 punt lager is dan de minimum vereiste volgens leeftijd dan kan er toch sprake zijn van gegeneraliseerde hypermobiliteit indien een positief antwoord gegeven wordt op minstens twee punten van onderstaande vragenlijst:
            1. Kunt u (of kon u ooit) uw handen plat op de grond plaatsen zonder de knieën te buigen?
            2. Kunt u (of kon u ooit) uw hand tegen uw onderarm buigen?
            3. Amuseerde u als kind uw vrienden met abnormale bewegingen of kon u de split?
            4. Heeft u als kind of tiener meerdere keren uw knieschijf of schouder geluxeerd?
            5. Ziet u zichzelf als erg lening/hypermobiel
            Criterium 2 : Twee van de volgende kenmerken A,B en C moeten aanwezig zijn
            
            Kenmerk A 
            Systemische kenmerken (kenmerken die aangeven dat meer organen dan het bewegingsapparaat betrokken zijn) passend bij een gegeneraliseerde bindweefselaandoening 
            5 van de 12 kenmerken moeten aanwezig zijn:
            1.	Opvallend zachte of fluweelachtige huid.
            2.	Milde hyperelastische huid (Huid aan de onderzijde van de onderarm is minstens 1,5 cm op te rekken).
            3.	Onverklaarbare striae zoals striae op de rug, lies, dijbenen, borsten en of buik bij adolescenten, mannen of prepuberale vrouwen die in het verleden nooit veel van gewicht veranderd zijn.
            4.	Aan twee voeten piezogene papels aan de hiel. Kleine bultjes die zichtbaar zijn zodra de voet belast wordt. Ze ontstaan doordat vetweefsel uitstulpt door de opperhuid.
            5.	Terugkerende of meerdere buikwandbreuken (bijvoorbeeld liesbreuk of navelbreuk).
            6.	Atrofische littekens (dunne en diepliggende littekens/ milde sigarettenpapier littekens) op ten minste 2 plekken zonder dat ze echt perkamentachtig en/of geelbruin verkleurd zijn zoals gezien wordt bij klassieke EDS.
            7.	Bekkenbodem-, rectum- of baarmoederverzakking bij kinderen, mannen of vrouwen die niet langer dan 20 weken zwanger zijn geweest, zonder dat ze ooit morbide obesitas hebben gehad of een andere onderliggende medische oorzaak.
            8.	Dental crowding (ruimtegebrek waardoor tanden scheef staan) in combinatie met een hoog en/of smal gehemelte.
            9.	Arachnodactyly (de vingers zijn heel lang en dun ten opzichte van de handpalm).
            Hier is sprake van indien:
            •	Het duimteken/Teken van Steinberg positief is aan beide kanten.
            (als de duim in de handpalm wordt gelegd en de handpalm gesloten steekt de duimtop uit).
            •	Het polsteken/Teken van Walker-Murdoch positief is aan beide kanten.(wanneer) de eerste en vijfde vinger om de andere pols worden gelegd overlappen ze elkaar.
            10.	De verhouding tussen de armlengte en lichaamslengte is groter dan of gelijk aan 1.05
            11.	Mitralisklepinsufficiëntie vastgesteld met een echo. Meestal is deze mild bij hEDS patiënten en hoeft deze niet behandeld worden.
            12.	Dilatatie oftewel een verwijding van de aortawortel met een Z-score >+2
            
            Kenmerk B 
            Positieve familie historie. 
            Een of meer eerstegraads (ouder, kind, broer of zus) familieleden voldoen aan de criteria voor hEDS.
            
            Kenmerk C
            Muscoskeletale complicaties oftewel complicaties van het bewegingsapparaat 
            Minstens 1 moet aanwezig zijn:
            1.	Dagelijks terugkerende muscoskeletale pijn in twee of meer ledematen die minstens 3 maanden duurt.
            2.	Chronische wijdverspreide pijn die minstens 3 maanden aanwezig is.
            3.	Terugkerende gewrichtsluxaties of duidelijk aanwezig instabiliteit van de gewrichten zonder trauma, er moet sprake zijn van a of b:
            a.	drie of meer luxaties zonder trauma in hetzelfde gewricht of 2 of meer atraumatische luxaties in verschillende gewrichten op verschillende momenten.
            b.	Medisch bevestigde gewrichtsinstabiliteit op 2 of meer plekken die geen verband houdt met een trauma.
            Criterium 3
            Aan al deze voorwaarden MOET voldaan zijn:
            1.	Afwezigheid van ongewone kwetsbaarheid van de huid. In dat geval moeten andere typen van EDS overwogen worden.
            2.	Andere aangeboren of ontstane bindweefselaandoeningen moeten uitgesloten zijn, alsook auto-immuun reumatische aandoeningen. Bij patiënten die een verkregen bindweefselaandoening hebben (bijvoorbeeld Lupus of reumatoïde artritis) moet een patiënt voor een bijkomende diagnose met hEDS voldoen aan kenmerk A en B bij criteria 2. Kenmerk C telt in dit geval niet mee voor de diagnose.
            3.	Het uitsluiten van andere diagnoses die gewrichtshypermobiliteit kunnen veroorzaken door hypotonie (verminderde spierspanning) en/of bindweefselzwakte zoals neuromusculaire aandoeningen, andere erfelijke bindweefselaandoeningen (bijvoorbeeld Marfan, andere types EDS en Loeys-Dietz syndrome) en skeletdysplasie (botgroeistoornis zoals osteogenesis imperfecta).
            Heel wat andere kenmerken zijn ook beschreven bij hEDS, maar ze zijn niet specifiek of bepalend genoeg om als criterium beschouwd te kunnen worden. Deze omvatten onder andere slaapstoornissen, vermoeidheid, posturale orthostatische tachycardie, functionele maagdarmstoornissen, dysautonomie,.... Alhoewel deze symptomen geen rol spelen bij de diagnose dient er toch voldoende aandacht aan gegeven te worden, aangezien ze vaak een grote invloed hebben op de kwaliteit van het leven. 
            ', 
            'diagnose' => 'Omdat de genetische basis voor hEDS nog steeds onbekend is zal de diagnose afhangen van het resultaat van het klinisch onderzoek, waarbij de arts zich baseert op de nieuwe criteria voor hEDS. In de nieuwe diagnose-criteria wordt onderscheid gemaakt tussen hEDS en HSD. Alleen wie volledig voldoet aan de criteria voor hEDS kan deze diagnose krijgen. Vroegere diagnoses blijven echter behouden. Het strenger maken van de criteria heeft als doel het verminderen van de heterogeniteit van de groep. Men hoopt hierdoor makkelijker de onderliggende genetische oorzaak te vinden.
            Om een diagnose hEDS te verkrijgen dient men te voldoen aan zowel criteria 1, 2 als 3
            Aangezien "de" test om te bepalen of men hEDS heeft tot nu toe niet bestaat, zal toekomstig onderzoek vermoedelijk leiden tot verdere herziening van de nu geldende criteria. 
            ', 
            'disease_id' => 3],
        ];
       
        TypeDisease::insert($eds);




        $eds = [
            ['name' => 'Arthrochalasia EDS (aEDS)', 
            'criteria' => 'De hoofdkenmerken zijn aangeboren dubbele heupluxatie, ernstige gegeneraliseerde hypermobiliteit met meerdere luxaties en/of subluxaties, en een rekbare huid.
            Als bijkomende criteria gelden verlaagde spierspanning, kyfoscoliose (zowel aan abnormale kromming van de wervelkolom naar achteren als naar de zijkant), een milde osteopenie (tekort aan bot, te lage botdichtheid), weefselfragiliteit, met inbegrip van atrofische littekens, kwetsbare huid.
            ', 
            'diagnose' => 'Men denkt aan een diagnose aEDS bij een aangeboren dubbele heupluxatie, samen met een rekbare huid of samen met een gegeneraliseerde hypermobiliteit en twee bijkomende criteria.  De definitieve diagnose wordt bevestig door een DNA-onderzoek, waarbij gezocht wordt naar een mutatie bij het COL1A1 en het COL1A2 gen, die leidt tot volledig of gedeeltelijk schrappen van de exon 6 van beide genen.  
            Bij onbeschikbaarheid van genetische testen kan een biopsie van de huid een diagnose ondersteunen, maar niet bevestigen. 
            De overerving is autosomaal dominant. 
            ', 
            'disease_id' => 3],

            ['name' => 'Dermatosparaxis EDS (dEDS)', 
            'criteria' => 'De belangrijkste hoofdkenmerken zijn een extreme kwetsbaarheid van de huid (met aangeboren of postnatale scheuren van de huid) en typische kenmerken van het gezicht en de schedel bij de geboorte of de vroege kindertijd, of die later in de kindertijd evolueren. Deze craniofaciale kenmerken zijn onder andere prominente en uitpuilende ogen met gezwollen oedemateuze oogleden en overmatige huid rond de oogkassen, epicantusplooien (huidplooi over binnenste ooghoek), downslanting palpebral fissures (buitenste ooghoek is lager dan binnenste ooghoek), blauwkleurig oogwit, grote fontanels en brede craniale hechtingen, vertraagde sluiting van fontanels en hypoplastische kin.

            Andere hoofdkenmerken zijn: overtollige, bijna lakse huid met overmatige huidplooien bij de polsen en enkels, verhoogde handpalmrimpels, ernstige bloeduitstortingen met een risico op onderhuidse hematomen en bloedingen, navelbreuk, postnatale groeivertraging, korte ledematen, handen en voeten, perinatale complicaties als gevolg van bindweefselfragiliteit. De gerapporteerde perinatale complicaties als gevolg van bindweefselfragiliteit zijn onder meer: aangeboren schedelfracturen, hersenbloedingen, broze navelstreng, aangeboren huidscheuren, neonatale klaplong. 
            De bijkomende criteria zijn een zachte en deegachtige huidtextuur, een rekbare huid, atrofische littekens, gegeneraliseerde hypermobiliteit, complicaties van viscerale kwetsbaarheid (vb blaasbreuk, middenrifbreuk, rectale verzakking,...), vertraagde motorische ontwikkeling, te lage botdichtheid, overmatige haargroei, tandafwijkingen, afwijkingen in het brekend vermogen van het oog, scheelzien.
            De overerving is autosomaal recessief.
            ', 
            'diagnose' => 'Minimale criteria zijn de twee belangrijkste hoofdcriteria plus ofwel één ander belangrijk criterium, ofwel drie bijkomende criteria. Een DNA-test is noodzakelijk om de diagnose te bevestigen. Hierbij zoekt men mutaties in het ADAMTS2 gen. ', 
            'disease_id' => 3],
        ];
       
        TypeDisease::insert($eds);




        $eds = [
            ['name' => 'Kyfoscoliose EDS (kEDS) ', 
            'info' => 'Kyfoscoliose verwijst naar een combinatie van kyfose en scoliose. Het is dus een abnormale kromming van de wervelkolom naar achteren én naar de zijkant.  ', 
            'criteria' => 'Bij kEDS onderscheidt men naast de hoofdcriteria en de bijkomende criteria ook nog gen-specifieke bijkomende criteria. 
            Als hoofdcriteria onderscheiden we een aangeboren verlaagde spierspanning, een aangeboren of zich op zuigelingenleeftijd ontwikkelende kyfoscoliose (progressief of niet progressief) en gegeneraliseerde hypermobiliteit met luxaties/subluxaties, vooral in de heupen en knieën. De verlaagde spierspanning is uitgesproken en kan tot een grote vertraging van de motorische ontwikkeling leiden. 
            Als bijkomende criteria beschouwen we een rekbare huid, gemakkelijk kneuzen van de huid, scheuren/aneurysma van een middelgrote slagader, osteopenie/osteoporose, blauw oogwit, lies- of navelbreuk, misvorming van de borstkas, marfanoïde gestalte, klompvoeten en brekingsafwijkingen van het oog (bijziend, verziend).
            Bijkomende criteria die verwijzen naar een mutatie in het PLOD1 gen zijn een kwetsbare huid (gemakkelijk blauwe plekken, broze huid, slechte wondgenezing, verbrede atrofische littekens), sclerale en oculaire fragiliteit/scheuren, te klein hoornvlies en afwijkingen van het gezicht. De gekende afwijkingen van het gezicht zijn laag geplaatste oren, epicantusplooien (huidplooi over binnenste ooghoek), downslanting palpebral fissures (buitenste ooghoek is lager dan binnenste ooghoek) en een hoog gehemelte.
            
            Bijkomende criteria die verwijzen naar een mutatie in het FKBP14 gen zijn aangeboren slechthorendheid, folliculaire hyperkeratose (een huidaandoening waarbij rode, ruwe, kegelvormige, verhoogde puistjes op de huid ontstaan), spieratrofie (verliezen van spieratrofie) en blaasdivertikels. 
            De overerving is autosomaal recessief.
            ', 
            'diagnose' => 'Er is een vermoeden van kEDS wanneer er sprake is de drie hoofdcriteria, of de eerste twee hoofdcriteria ( aangeboren verlaagde spierspanning en vroeg kyfoscoliose ) samen met drie bijkomende criteria. Deze bijkomende criteria mogen zowel algemeen als gen-specifiek zijn.
            Een DNA-test is noodzakelijk om de diagnose te bevestigen. De meeste patiënten met kEDS hebben mutaties in het gen PLOD1. Recent zijn er ook mutaties geïdentificeerd in het FKBP14 gen, waarbij patiënten een fenotype vertonen dat klinisch grotendeels overlapt met kEDS-PLOD1. 
            Het is mogelijk dat het fenotype van kEDS aanwezig is, terwijl de hier boven vermelde mutaties niet gevonden worden. Dit kan omwille van het feit dat specifieke soorten mutaties via de klassieke technieken niet terug gevonden kunnen worden, of omwille van het feit dat andere, nog niet ontdekte genen, kunnen geassocieerd worden met dit fenotype. In die geval dienen alternatieve diagnoses overwogen te worden.             
            ', 
            'disease_id' => 3],
        ];
       
        TypeDisease::insert($eds);



        $eds = [
            ['name' => 'Brittle Cornea Syndroom (BCS)', 
            'criteria' => 'De hoofcriteria hebben betrekking op de ogen: dun hoornvlies, met of zonder breuk, vroeg begin van progressieve keratoconus (hoornvlies verandert van een bolle vorm in een spitse kegel), vroeg begin van progressieve keratoglobus (verdunning van het hoornvlies in de randgebieden met als gevolg een bolvormige uitzetting van het hoornvlies), blauw oogwit.
            Mogelijk bijcriteria zijn verwijdering van het oog of  littekens op het hoornvlies door vroegere breuken, progressief verlies van de diepte van het hoornvlies, vooral centraal, hoge bijziendheid, met normale of matig verhoogde axiale lengte, netvliesloslating, doofheid, vaak met gemengde geleidende en sensorineurale componenten, progressief, hogere frequenties vaak zwaarder getroffen ("sloping" zuivere toon audiogram),  super lax trommelvlies, ontwikkelingsdysplacie van de heup, verlaagde spierspanning in de kindertijd, eerder mild indien aanwezig, scoliose, arachnodactylie (abnormaal lange en slanke vingers ten opzichte van de grootte van de handpalm), hypermobiliteit van de distale gewrichten, platvoeten, hallux valgus, milde verkorting van de vingers (vooral de vijfde), zachte fluweelachtige huid, doorschijnende huid.
            ', 
            'diagnose' => 'Een vermoeden van BCS is er bij een dun hoornvlies, met of zonder breuk dat voorkomt samen met één ander hoofdcriterium en/of 3 bijkomende criteria. Een definitieve diagnose kan enkel door bevestiging via DNA-onderzoek. De mutaties zijn aanwezig op de genen ZNF469 en PRDM5. De overerving is autosomaal recessief. ', 
            'disease_id' => 3],


            ['name' => 'Spondylodysplastische EDS  (spEDSS)', 
            'criteria' => ' De hoofdcriteria zijn een korte gestalte (progressief in de kindertijd), spierzwakte (variërend van ernstig aangeboren tot een mild later begin), buigen van ledematen. 
            Als bijkomende criteria onderscheidt men een rekbare huid, zachte deegachtige huid, dunne doorzichtige huid, platvoeten, vertraagde motorische ontwikkeling, osteopenie (tekort aan botmassa), en vertraagde cognitieve ontwikkeling. 
            Daarnaast zijn er ook gen-specifieke criteria:
            Betreffende het B4GALT7 gen zijn bijkomende criteria radioulnar synostosis (aangeboren abnormale verbinding van bepaalde botten in de onderarm) , bilaterale elleboogcontracturen (verkorting van spieren, pezen en/of gewrichtskapsels) of beperkte elleboogbeweging, gegeneraliseerde hypermobiliteit, één transversale palmaire vouw, karakteristieke kenmerken van gezicht en schedel, karakteristieke radiologische afwijkingen, ernstige hypermetropie (verziendheid) en betrokken hoornvlies.  
            De karakteristieke kenmerken van gezicht en schedel die samenhangen met dit gen zijn driehoekig gezicht, brede regelafstand ogen, uitpuilende ogen, smalle mond, laag ingeplante oren, dun hoofdhaar, abnormaal gebit, plat gezicht, breed voorhoofd, blauw oogwit en gespleten gehemelte/gespleten huig. 
            Gerapporteerde radiografische bevindingen in verband met B4GALT7 mutaties zijn onder andere spaakbeen synostosis (abnormale benige verbinding van bepaalde botten in de onderarm), metafyseale affakkeling, osteopenie (verminderde botmassa), radiuskop subluxatie (elleboog) of dislocatie en korte sleutelbeenderen met brede mediale uiteinden.
            Voor het B3GALT6 gen zijn dit kyphoscoliose (aangeboren of vroeg beginnend, progressief), gezamenlijke hypermobiliteit, veralgemeend of beperkt tot de distale gewrichten, met luxaties, gemengde contracturen (verkorting van spieren, pezen en/of gewrichtskapsels), aangeboren of progressief en vooral bij de handen, kenmerkende vingers (abnormaal lang en slank ten opzichte van de grootte van de handpalm, taps, spatel, met brede laatste kootjes), klompvoeten, karakteristieke kenmerken van gezicht en schedel en tandverkleuring, dysplastisch gebit.
            Karakteristieke gezichts- en schedelkenmerken die samenhangen met B3GALT6 mutaties zijn onvolledige ontwikkeling van het midden-gezicht, bol voorhoofd, uitpuilende ogen, blauw oogwit, downslanting palpebral fissures (buitenste ooghoek is lager dan binnenste ooghoek), lage neusbrug, lange bovenlip, laag ingeplante oren, kleine onderkaak met een niet ontwikkelde kin, abnormale gebit, gespleten gehemelte , dun haar.
            De gerapporteerde radiografische bevindingen zijn aangeboren afplattingen van de ruggewervels, voorste bek van wervellichaam, kort illium (deel van het heupbeen), opvallend mindere trochanter (knobbel van het dijbeen, die wat naar buiten uitsteekt), heupdysplassie, metafyseale affakkeling,
            metafyseale dysplasie van de heupkop, elleboogvervorming, radiuskop dislocatie (elleboog), slankere botten dan normaal, buigen van lange botten, gegeneraliseerde osteoporose, genezen breuken. Craniosynostose (verbening van de schedelnaden) en spaakbeen dysostosis (abnormale benige verbinding van bepaalde botten in de onderarm) werd gemeld bij één patiënt
            
            Gerapporteerde radiologische bevindingen bij een mutatie in het SLC39A13 gen zijn milde tot matige aangeboren afplattingen van de ruggewervels, milde tot matige osteopenie van de wervelkolom, klein ileum (= kronkeldarm), platte proximale kop van het dijbeen, korte, brede dijbeenhals
             en broosheid, familiegeschiedensi van een eerste graad familielid die voldoet aan de klinische criteria 
            (overerving is autosomaal dominant).', 
            'diagnose' => 'Een klinische diagnose van spEDS wordt gesteld bij een korte gestalte, verlaagde spierspanning, karakteristieke radiologische afwijkingen en ten minste drie bijkomende criteria. Om tot een definitieve diagnose te komen wordt een DNA-test uitgevoerd.
            De mutaties situeren zich bij de B4GALT7 en B3GALT6 en SLC39A13 genen. De overerving is autosomaal recessief. Bij tenminste één familie met een klinisch fenotype BCS worden deze mutaties niet in deze genen terug gevonden, wat suggereert dat ten minste één ander, nog niet gekend, gen geassocieerd is met BCS (Rorbach M SH, 2013). Daaruit volgt dat afwezigheid van mutaties in de gekende genen een diagnose niet uitsluiten. 
            ', 
            'disease_id' => 3],

            ['name' => 'Musculocontracturale EDS  (mcEDS)', 
            'criteria' => 'Als hoofdkenmerken onderscheiden we aangeboren meervoudige contracturen (verkortingen van spier, pees of gewrichtskapsel), karakteristieke adductie-flexiecontracturen en/of klompvoet. Een tweede hoofdkenmerk zijn karakteristieke kenmerken van gezicht en schedel, die evident zijn bij de geboorte of in de vroege kindertijd. Hier onder verstaan we grote fontanelle, wijd uit elkaar staand ogen, korte en downslanting palpebral fissures (buitenste ooghoek is lager dan binnenste ooghoek), blauw oogwit, korte neus met onvolledig ontwikkelde columella (huid onderaan de neus, tussen de twee neusgaten), laag geplaatste en gedraaide oren, hoog gehemelte, lang filtrum (verticale sleuf in de bovenlip), dunne bovenlip, kleine mond, micro-retrognathie (gezichtsvorm waarbij de kaken erg kort en klein zijn, doordat deze naar achter staan)
            Het derde en laatste hoofdkenmerk is een karakteristieke huid, waaronder rekbare huid, gemakkelijk blauwe plekken krijgen, huidfragiliteit met atrofische littekens, verhoogde rimpelvorming in de palm van de hand. 
            Als bijkomende criteria omschrijven we terugkerende/chronische luxaties, misvormingen van het borstbeen (plat, hol), misvormingen van de ruggegraat (scoliose, kyfoscoliose), karakteristieke vingers (taps toelopend, slank, cilindrisch), progressieve misvormingen van de voet (talipes valgus, (steunen op de binnenkant van de voet), platvoeten, holle voeten), grote onderhuidse hematomen. chronische constipatie, darmdiverticulitis, klaplong / abnormale ophoping van bloed in de pleuraholte, vorming van nierstenen in het nierbekken / blaasstenen, hydronefrose (zakvormig uitzetten van het nierbekken, als gevolg van een verminderde afvoer van urine uit de blaas), cryptorchisme bij mannen (beide testikels zijn aanwezig, maar niet op de juiste plaats), scheelzien, refractiefouten (bijziendheid, astigmatisme), glaucoom / verhoogde oogdruk.
            ', 
            'diagnose' => 'Wanneer de diagnose vanaf de geboorte of in de vroege kinderjaren gebeurt is er reeds een vermoeden van mcEDS als het eerste hoofdcriterium aanwezig is. In de adolescentie en volwassenheid is zijn twee hoofdcriteria vereist: naast de aangeboren meerdere contracturen is ook een karakteristieke huid vereist.
            Bevestigende moleculaire testen zijn vereist voor een definitieve diagnose. De mutaties treden bij mcEDS op in de CHST14 en DSE genen. De overerving is autosomaal recessief. 
            Afwezigheid van het vinden van mutaties in de hier boven vermelde genen sluit de diagnose mcEDS niet uit, omdat specifieke soorten mutaties onopgemerkt kunnen blijven door de standaard diagnostische moleculaire technieken. In het geval dat er geen CHST14 of DSE mutaties worden gevonden, moeten alternatieve diagnoses overwogen worden.  
            ', 
            'disease_id' => 3],

            ['name' => 'Myopathische EDS (mEDS)', 
            'criteria' => 'Hoofdcriteria zijn aangeboren spierzwakte en/of spieratrofie (dunner en minder krachtig worden van de spieren), die verbetert met de leeftijd, verkortingen van spier, pees of gewrichtskapsel ter hoogte van knie, heup en elleboog, hypermobiliteit van de distale gewrichten. 
            Bijkomende criteria zijn een zachte, pafferige huid, atrofische littekens, motorische ontwikkelingsachterstand en myopathie (abnormale conditie of ziekte van het spierweefsel) bij spierbiopsie.            
            ', 
            'diagnose' => 'verbetert met de leeftijd, samen met één ander hoofdcriterium en/of drie bijkomende criteria. Een DNA-test is noodzakelijk om een definitieve diagnose te bekomen. 
            Het gen waarin de mutaties gezocht worden is het COL12A1 gen. De overerving is zowel autosomaal dominant als autosomaal recessief. Tot dusver zijn vijf families gemeld met deze afwijking. Vier met de autosomaal dominante variante, en één met de autosomaal recessieve. De broers met mEDS van de familie met de autosomaal recessieve overerving hebben een meer ernstige vorm van de aandoening dan personen met de autosomaal dominante variante. 
            ', 
            'disease_id' => 3],

            ['name' => 'Parodontale EDS (pEDS)', 
            'criteria' => 'Hoofdcriteria zijn een ernstige en hardnekkige periodontitis (besmetting van de structuren in de mond die de tanden en cementum bij de wortel van de tand omringen) van jongs af aan (jeugd of adolescentie), gebrek aan aangehecht tandvlees, pretibiale plaques, familiegeschiedenis van een eerstegraads familielid die voldoet aan de klinische criteria, aangezien de overerving autosomaal dominant is.
            Bijkomende criteria zijn gemakkelijk blauwe plekken, gegeneraliseerde hypermobiliteit, voornamelijk distale gewrichten, rekbare huid en kwetsbaarheid, abnormale littekens (brede of atrofische), verhoogde gevoeligheid voor infecties, hernia, marfanoïde gelaatstrekken, acrogeria (huidaandoening die gekenmerkt wordt door vroegtijdige veroudering, meer in het bijzonder in de vorm van een ongewoon fragiele, dunne huid op de handen en voeten (distale ledematen) en prominente bloedvaten.
            ', 
            'diagnose' => 'De klinische kenmerken voor pEDS zijn een ernstige en hardnekkige periodontitis van jongs of aan of een gebrek aan aangehecht tandvlees.  
            De moleculaire basis ligt bij bekende of compatibele mutaties van C1R en C1S genen. Momenteel weet men niet of de afwezigheid van C1R of C1S mutaties de diagnose uitsluit, omdat de ervaring met de moliculaire diagnose beperkt is.
            ', 
            'disease_id' => 3],

        ];
       
        TypeDisease::insert($eds);

    }
}
