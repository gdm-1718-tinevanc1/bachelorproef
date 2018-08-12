import { Component, OnInit } from '@angular/core';
import { IExample } from '../shared/models/iexample';
import { ITypeExample } from '../shared/models/itypeexample';
import { TherapyService } from '../shared/services/therapy.service';

@Component({
  selector: 'app-examples',
  templateUrl: './examples.component.html',
  styleUrls: ['./examples.component.scss']
})
export class ExamplesComponent implements OnInit {
  examples: Array<IExample>
  types: Array<ITypeExample>
  constructor(private therapyService: TherapyService) { }

  ngOnInit() {
    this.therapyService.getExamplesTypes().subscribe(
      result => { this.types = result},
      err => console.log('err')
    )

    this.getAllExamples();
  }

  getAllExamples(){
    this.therapyService.getExamples().subscribe(
      result => { this.examples = result },
      err => console.log('err')
    )
  }

  getExamplesByType(type){
    if(type == 'all'){
      this.getAllExamples();
    } else{
      this.therapyService.getExamplesByType(type).subscribe(
        data => { this.examples = data });
    }
  }

}

