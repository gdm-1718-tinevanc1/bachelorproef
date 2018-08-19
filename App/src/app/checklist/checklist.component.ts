import { Component, OnInit } from '@angular/core';
import * as jsPDF from 'jspdf';

@Component({
  selector: 'app-checklist',
  templateUrl: './checklist.component.html',
  styleUrls: ['./checklist.component.scss']
})
export class ChecklistComponent implements OnInit {
  age;
  beighton = 0;
  hypermobility = {
    pinkyLeft: false,
    pinkyRight: false,
    thumbLeft: false,
    thumbRight: false,
    elbowLeft: false,
    elbowRight: false,
    kneeLeft: false,
    kneeRight: false,
    back: false
  }
  symptoms = {
    velvetySkin: false,
    hyperelasticSkin: false,
    stretchMarks: false,
    piezogenPapels: false,
    hernia: false,
    scars: false,
    prolapse: false,
    dentalCrowding: false,
    arachnodactyly: false,
    ratio: false,
    mvi: false,
    aneurysm: false,
  }
  familyHistory: false;
  complications = {
    musculoskeletalPain: false,
    chronicPain: false,
    luxations: false
  }
  
  result = '';
  constructor() { }

  ngOnInit() {
  }

  save(){
    let checkHypermobility = this.checkHypermobility();
    let checkSymptoms = this.checkSymptoms();
    let checkFamilyHistory = this.familyHistory;
    let checkComplications = this.checkComplications();

    
    if(!checkHypermobility){
      this.result = 'Volgens deze test voldoet u niet aan de voorwaarden voor hypermobiliteit, HSD of hEDS';
    } else if(checkSymptoms && (checkFamilyHistory || checkComplications) || (checkFamilyHistory && checkComplications)){
      this.result = 'Volgens deze test voldoet u aan de criteria voor hEDS. Dit sluit geen andere EDS types of andere aandoeningen uit. Het is belangrijk om een dokter te contacteren.'
    } else if(checkComplications || checkSymptoms){
      this.result = 'Volgens deze test voldoet u aan de criteria voor G-HSD.'
    }
    else{
      this.result = 'Volgens deze test voldoet u aan de criteria voor normale hypermobiliteit of een andere vorm van HSD.'
    }
  }

  checkHypermobility(){
    let requiredAmount = this.age;
    let amount = 0;
    let hypermobilityProps = Object.keys(this.hypermobility);
    for (let prop of hypermobilityProps) { 
      if(this.hypermobility[prop])
        amount ++
    }
    this.beighton = amount;
    if(amount >= requiredAmount) 
      return true;

    return false;
  }

  checkSymptoms(){
    let amount = 0;
    let symptomsProps = Object.keys(this.symptoms);
    for (let prop of symptomsProps) { 
      if(this.symptoms[prop])
        amount ++
    }
    if(amount >= 5) 
      return true;

    return false;
  }

  checkComplications(){
    let amount = 0;
    let complicationsProps = Object.keys(this.complications);
    for (let prop of complicationsProps) { 
      if(this.complications[prop])
        amount ++
    }
    if(amount >= 1) 
      return true;

    return false;
  }

  download(){
    let lines;
    const doc = new jsPDF(), margin = 0.5;
    doc.setFontSize(20);
    doc.text('Resultaten criteria hEDS', 10, 15);

    doc.setFontSize(15);
    doc.text('Hypermobiliteit:', 10, 25);

    doc.setFontSize(10)


    doc.setFontType('bold')
    doc.text(12, 30, this.beighton.toString())

    doc.setFontType('normal')
    doc.text(15, 30, "/9 beighton score")

    /************* */
    doc.setFontSize(15);
    doc.text('Systemische kenmerken', 10, 47);
    doc.setFontSize(10)
    
    doc.rect(10, 51, 4, 4, this.symptoms.velvetySkin ? 'F': 'A')
    lines = doc.splitTextToSize("Opvallend zachte of fluweelachtige huid.", 190);
    doc.text(20, 54, lines)

    doc.rect(10, 58, 4, 4, this.symptoms.hyperelasticSkin ? 'F': 'A')
    lines = doc.splitTextToSize("Milde hyperelastische huid.", 190);
    doc.text(20, 61, lines)

    doc.rect(10, 65, 4, 4, this.symptoms.stretchMarks ? 'F': 'A')
    lines =  doc.splitTextToSize("Onverklaarbare striae zoals striae op de rug, lies, dijbenen, borsten en of buik.",190);
    doc.text(20, 68 , lines)

    doc.rect(10, 72, 4, 4, this.symptoms.piezogenPapels ? 'F': 'A')
    lines = doc.splitTextToSize("Aan twee voeten piezogene papels aan de hiel.", 190);
    doc.text(20, 75, lines)

    doc.rect(10, 79, 4, 4, this.symptoms.hernia ? 'F': 'A')
    lines = doc.splitTextToSize("Terugkerende of meerdere buikwandbreuken.", 190);
    doc.text(20, 82, lines)
    
    doc.rect(10, 86, 4, 4, this.symptoms.scars ? 'F': 'A')
    lines = doc.splitTextToSize("Atrofische littekens.", 190);
    doc.text(20, 89, lines)

    doc.rect(10, 93, 4, 4, this.symptoms.prolapse ? 'F': 'A')
    lines = doc.splitTextToSize("Bekkenbodem-, rectum- of baarmoederverzakking zonder een onderliggende medische oorzaak.", 190);
    doc.text(20, 96, lines)

    doc.rect(10, 101, 4, 4, this.symptoms.dentalCrowding ? 'F': 'A')
    lines = doc.splitTextToSize("Dental crowding in combinatie met een hoog en/of smal gehemelte.", 190);
    doc.text(20, 104, lines)

    doc.rect(10, 108, 4, 4, this.symptoms.arachnodactyly ? 'F': 'A')
    lines = doc.splitTextToSize("Arachnodactyly (lange vingers).", 190);
    doc.text(20, 111, lines)

    doc.rect(10, 115, 4, 4, this.symptoms.ratio ? 'F': 'A')
    lines = doc.splitTextToSize("De verhouding tussen de armlengte en lichaamslengte >= 1.05.", 190);
    doc.text(20, 118, lines)

    doc.rect(10, 122, 4, 4, this.symptoms.mvi ? 'F': 'A')
    lines = doc.splitTextToSize("Mitralisklepinsufficiëntie vastgesteld met een echo.", 190);
    doc.text(20, 125, lines)

    doc.rect(10, 129, 4, 4, this.symptoms.aneurysm ? 'F': 'A')
    lines = doc.splitTextToSize("Verwijding van de aortawortel met een Z-score >+2.", 190);
    doc.text(20, 132, lines)


    doc.setFontSize(15);
    doc.text('Familiale geschiedenis', 10, 150);
    doc.setFontSize(10)

    doc.rect(10, 154, 4, 4, this.familyHistory ? 'F': 'A')
    lines = doc.splitTextToSize("Een of meer eerstegraads (ouder, kind, broer of zus) familieleden voldoen aan de criteria voor hEDS.", 190);
    doc.text(20, 157, lines)

    doc.setFontSize(15);
    doc.text('Muscoskeletale complicaties', 10, 175);
    doc.setFontSize(10)

    doc.rect(10, 179, 4, 4, this.complications.musculoskeletalPain ? 'F': 'A')
    lines = doc.splitTextToSize("Dagelijks terugkerende muscoskeletale pijn in twee of meer ledematen die minstens 3  maanden duurt.", 190);
    doc.text(20, 182, lines)

    doc.rect(10, 186, 4, 4, this.complications.chronicPain ? 'F': 'A')
    lines = doc.splitTextToSize("Chronische wijdverspreide pijn die minstens 3 maanden aanwezig is.", 190);
    doc.text(20, 189, lines)

    doc.rect(10, 193, 4, 4, this.complications.luxations ? 'F': 'A')
    lines = doc.splitTextToSize("Terugkerende gewrichtsluxaties of duidelijk aanwezig instabiliteit van de gewrichten zonder trauma.", 190);
    doc.text(20, 196, lines)


    doc.setFontSize(12);
    lines = doc.splitTextToSize(this.result, 190);
    doc.text(10, 210, lines)


    doc.save('checklist.pdf');
  }

}
