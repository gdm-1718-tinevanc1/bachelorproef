import { Component, OnInit } from '@angular/core';
import { SymptomsService } from '../shared/services/symptoms.service';
import { ISymptom } from '../shared/models/isymptom';
import { faSquare } from '@fortawesome/free-solid-svg-icons';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-symptoms-list',
  templateUrl: './symptoms-list.component.html',
  styleUrls: ['./symptoms-list.component.scss']
})
export class SymptomsListComponent implements OnInit {
  faSquare = faSquare;
  symptoms: Array<ISymptom>;
  id = this.route.snapshot.params['id'];
  
  constructor(private route: ActivatedRoute,
    private symptomsService: SymptomsService) { }

  ngOnInit() {
    this.symptomsService.getSymptoms().subscribe(
      result => { this.symptoms = result },
      err => console.log('err')
    )
    this.route.params.subscribe(params => {
      this.id = params['id']
    });
  }
}
