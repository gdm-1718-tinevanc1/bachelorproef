import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthenticationService } from '../shared/services/authentication.service';
import { DiseaseService } from '../../diseases/shared/services/disease.service';
import { IDisease } from '../../diseases/shared/models/idisease';
import { CountriesService } from '../shared/services/countries.service';
import { ICountry } from '../shared/models/icountry';
import { CoreService } from '../shared/services/core.service';

declare let $: any;

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {
  authenticated;
  role;
  diseases: Array<IDisease>;
  countries: Array<ICountry>;
  selectedCountry_id;
  isExpanded = false;

  constructor(private authenticationService: AuthenticationService,
    private diseaseService: DiseaseService,
    private countriesService: CountriesService,
    private coreService: CoreService,
    private route: ActivatedRoute,
    private router:Router) {
      router.events
        .forEach(e => {
          if(route.root.firstChild){
            this.isExpanded = false;
          }
      });
    }

  ngOnInit() {
    this.selectedCountry_id = localStorage.getItem('country_id') ? localStorage.getItem('country_id') : '1';

    this.countriesService.getCountries().subscribe(
      data => {this.countries = data },
      err => console.error(err),
     );

    this.authenticationService.checkAuth();
    this.authenticated = this.authenticationService.user.authenticated;
    this.role = this.authenticationService.user.role;

    this.diseaseService.getDiseases().subscribe(
      result => { this.diseases = result, console.log(this.diseases) },
      err => console.log('err')
    )
  }

  logout(){
    this.authenticationService.logout();
  }

  changeCountry(event){
    this.coreService.setItem('country_id', event);
    // localStorage.setItem('country_id', event);
  }


  collapse() {
    this.isExpanded = false;
  }

  toggle() {
    this.isExpanded = !this.isExpanded;
  }
}

