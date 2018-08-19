import { Component, OnInit } from '@angular/core';
import { IFaq } from './shared/models/ifaq';
import { FaqsService } from './shared/services/faqs.service';

@Component({
  selector: 'app-faqs',
  templateUrl: './faqs.component.html',
  styleUrls: ['./faqs.component.scss']
})
export class FaqsComponent implements OnInit {
  faqs: Array<IFaq>;

  constructor(private faqsService: FaqsService) { }

  ngOnInit() {
    this.faqsService.getFaqs().subscribe(
      result => { this.faqs = result},
      err => console.log('err')
    )
  }

  collapsible($event){
    let body;
    if($(event.target).hasClass('fa')){
      let parent = $($event.target).parent(); 
      body = parent.next(); 
    } else{
      body = $($event.target).next(); 
    }    body.css("display", body.css("display") === 'block' ? 'none' : 'block');
  }

}
