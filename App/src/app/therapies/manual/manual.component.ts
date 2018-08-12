import { Component, OnInit } from '@angular/core';
import { IManual } from '../shared/models/imanual';
import { TherapyService } from '../shared/services/therapy.service';

@Component({
  selector: 'app-manual',
  templateUrl: './manual.component.html',
  styleUrls: ['./manual.component.scss']
})
export class ManualComponent implements OnInit {
  manuals: Array<IManual>
  constructor(private therapyService: TherapyService) { }

  ngOnInit() {
    this.therapyService.getManuals().subscribe(
      result => { 
        this.manuals = result
       },
      err => console.log('err')
    )
  }
}

