import { Component, OnInit } from '@angular/core';
import { DiseaseService } from '../diseases/shared/services/disease.service';
import { IDisease } from '../diseases/shared/models/idisease';
import { ContactService } from './shared/service/contact.service';
import { IContact } from './shared/models/icontact';
import { INews } from '../news/shared/models/inews';
import { FlashMessagesService } from '../../../node_modules/angular2-flash-messages';
import { NewsService } from '../news/shared/service/news.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  diseases: Array<IDisease>;
  contact_credentials = {
    name: '',
    email: '',
    message: ''
  };
  news = {
    title: '',
    subtitle: '',
    date: null,
    place: '',
    text: null,
    source: ''
  };
  constructor(private diseaseService: DiseaseService,
    private contactService: ContactService,
    private _flashMessagesService: FlashMessagesService,
    private newsService: NewsService  ) { }

  ngOnInit() {
    this.diseaseService.getDiseases().subscribe(
      result => { this.diseases = result},
      err => console.log('err')
    )

    this.newsService.getNewsLast().subscribe(
      result => { this.news = result[0]},
      err => console.log('err')
    )
  }


  saveContact() {
    this.contactService.postContact(this.contact_credentials).subscribe(
      res => {
        this._flashMessagesService.show('Uw contactformulier werd verstuurd.', { cssClass: 'alert-success', timeout: 3000 });
      },
      err => {
        console.log(err);
        this._flashMessagesService.show('Er is een probleem, probeer nog eens opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
      }
    );
  }

}
