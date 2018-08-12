import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import * as $ from 'jquery';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'app';
  pageName;
  container;
  
    constructor(router:Router, route:ActivatedRoute) {

      router.events
        .forEach(e => {
          if(route.root.firstChild){
            this.pageName = route.root.firstChild.snapshot.data['PageName'];
            if(this.pageName == 'home'){
              this.container = '';
            } else {
              this.pageName = 'page__background'
              this.container = 'container';
            }
          }
      });
  }
}



