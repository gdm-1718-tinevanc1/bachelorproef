import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { SymptomsService } from '../shared/services/symptoms.service'
import { ISymptom } from '../shared/models/isymptom';

@Component({
  selector: 'app-symptoms-detail',
  templateUrl: './symptoms-detail.component.html',
  styleUrls: ['./symptoms-detail.component.scss']
})
export class SymptomsDetailComponent implements OnInit {
  // symptom :  ISymptom;

  public symptom = {
    id: null,
    title: '',
    info: null,
    sources: []
  }
  constructor(
    private route: ActivatedRoute,
    private symptomsService:SymptomsService) { }

  ngOnInit() {
    this.route.params.subscribe(params => {
      const id = params['id']
      this.symptomsService.getSymptomsById(id).subscribe(
        data => { 
          this.symptom = data
        }
      )
   });
  }
}
