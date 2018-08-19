import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { DiseaseService } from '../shared/services/disease.service';
import { IDisease } from '../shared/models/idisease';
declare let $: any;

@Component({
  selector: 'app-diseases-detail',
  templateUrl: './diseases-detail.component.html',
  styleUrls: ['./diseases-detail.component.scss']
})
export class DiseasesDetailComponent implements OnInit {
  public disease = {
    id: null,
    title: '',
    shorttitle: '',
    description: '',
    types_diseases: [],
    sources: []
  };

  // public diseases: Array<IDisease>;
  constructor(
    private route: ActivatedRoute,
    private diseaseService: DiseaseService
  ) { }


  ngOnInit() {
    $('.collapsible').collapsible();
    this.route.params.subscribe(params => {
      const id = params['id']
      this.diseaseService.getDiseasesById(id).subscribe(
        data => {
          this.disease = data;
        },
        err => console.error(err),
        () => console.log('completed')
       );
   });
    
  }

  collapsible($event){
    let body;
    if($(event.target).hasClass('fa')){
      let parent = $($event.target).parent(); 
      body = parent.next(); 
    } else{
      body = $($event.target).next(); 
    }
    body.css("display", body.css("display") === 'block' ? 'none' : 'block');
  }

}

