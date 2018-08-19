import { Component, OnInit } from '@angular/core';
import { RightService } from '../shared/services/right.service';
import { IRight } from '../shared/models/iright';
import { ITypeAgency } from '../shared/models/itypeagency';
import { CoreService } from '../../core/shared/services/core.service';


@Component({
  selector: 'app-rights-list',
  templateUrl: './rights-list.component.html',
  styleUrls: ['./rights-list.component.scss']
})
export class RightsListComponent implements OnInit {
  rights: Array<IRight>;
  types: Array<ITypeAgency>;
  country_id = '1';

  constructor(private rightService: RightService,
    private coreService: CoreService) { }

  ngOnInit() {
    this.country_id = localStorage.getItem('country_id') ? localStorage.getItem('country_id') : '1';
    this.getAgencies();

    this.coreService.watchStorage().subscribe((data:string) => {
      let id = localStorage.getItem('country_id');
      if(id){
        this.country_id = id;
      }
      this.getAgencies();
    })

    this.getAllRights();
  }

  getAgencies(){
    this.rightService.getRightsTypes(this.country_id).subscribe(
      result => { this.types = result},
      err => console.log('err')
    )
  }

  getAllRights(){
    this.rightService.getRights().subscribe(
      result => { 
        this.rights = result
       },
      err => console.log('err')
    )
  }

  getRightsByType(type){
    if(type == 'all'){
      this.getAllRights();
    } else{
      this.rightService.getExercisesByAgency(type).subscribe(
        data => { this.rights = data });
    }
  }

  changeCountry(event){
    this.country_id = event;
    this.getAgencies();
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


