import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from '../../core/shared/services/authentication.service';
import { ProfileService } from '../shared/services/profile.service';
import { CountriesService } from '../../core/shared/services/countries.service';
import { ICountry } from '../../core/shared/models/icountry';
import { FlashMessagesService } from 'angular2-flash-messages';
import { Router } from '@angular/router'; 

declare let $: any;

@Component({
  selector: 'app-profile-edit',
  templateUrl: './profile-edit.component.html',
  styleUrls: ['./profile-edit.component.scss']
})
export class ProfileEditComponent implements OnInit {
  role = this.authenticationService.user.role;
  creds = {
    id: null,
    username: '',
    email: '',
    profile:  {
      firstname: '',
      lastname: '',
      phonenumber: '',
      location: {
        city: '',
        zipcode: '',
        street: '',
        housenumber: '',
        country_id: null,
      },
      rizivnumber: '',
      function: '',
      profile_medical: {
        howfar: '',
        note: '',
        profile_pain: {
          shoulderjoint_left: '',
          shoulderjoint_right: '',
          shoulderbelt_left: '',
          shoulderbelt_right: '',
          elbow_left: '',
          elbow_right: '',
          upperarm_left: '',
          upperarm_right: '',
          underarm_left: '',
          underarm_right: '',
          wristjoint_left: '',
          wristjoint_right: '',
          knuckles_left: '',
          knuckles_right: '',
          thumbbase_left: '',
          thumbbase_right: '',
          fingerjoints_left: '',
          fingerjoints_right: '',
          hipjoint_left: '',
          hipjoint_right: '',
          buttock_left: '',
          buttock_right: '',
          knee_left: '',
          knee_right: '',
          ankle_left: '',
          ankle_right: '',
          foot_left: '',
          foot_right: '',
          toes_left: '',
          toes_right: '',
          neck: '',
          jaw_left: '',
          jaw_right: '',
          lowerback: '',
          upperback: '',
          chest: '',
          belly: ''
        },
        profile_brace: {
          neckcollar: '',
          shoulderbrace: '',
          pressure_upper: '',
          pressure_under: '',
          kneebrace: '',
          anklebrace: '',
          supportsoles: '',
          silversplints: '',
          wristbrace: '',
          corset: '',
          bandlowback:'',
          stockings: ''
        },
        profile_walktool: {
          wheelchair: '',
          elecwheelchair: '',
          balancebike: '',
          crutch: ''
        },
        profile_luxation:{
          pelvicjoint: '',
          hip: '',
          knee: '',
          ankle: '',
          metatarsalbone: '',
          toes: '',
          lowback: '',
          highback: '',
          ribs: '',
          neck: '',
          jaws: '',
          shoulder: '',
          elbow: '',
          wrist: '',
          metacarpal: '',
          fingers: ''
        }
      }
    }
  };
  id = null;
  countries: Array<ICountry>;
  constructor(private authenticationService : AuthenticationService,
    private profilesService: ProfileService,
    private countriesService: CountriesService,
    private _flashMessagesService: FlashMessagesService,
    private router: Router) { }

  ngOnInit() {
    $('.tabs').tabs();
    this.id = localStorage.getItem('id');
    this.role = this.authenticationService.user.role;
    this.countriesService.getCountries().subscribe(
      data => { this.countries = data },
      err => console.error(err));
      
    this.profilesService.getProfilesById(this.id).subscribe(
      result => { this.creds = result
        if(!result.profile.profile_medical){
          this.creds.profile.profile_medical = this.profilesService.profile_medical;
        }
      },
      err => console.log('err')
    ) 
  }


  save(){
    this.profilesService.save(this.creds).subscribe(
      res => {
        this._flashMessagesService.show('Uw profiel is aangepast!', { cssClass: 'alert-success', timeout: 3000 });
      },
      err => {
        console.log("Error occured", err);
        this._flashMessagesService.show('Er is een probleem, probeer nog eens opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
      }
    );
  }


  deleteCancel(){
    $('.modal').css("display", 'none');
  }

  softDelete(){
    this.profilesService.softdelete(this.creds.id).subscribe(
      res => {
        this.router.navigate(['']);
        this.authenticationService.logout();
        this._flashMessagesService.show('Uw profiel is verwijderd!', { cssClass: 'alert-success', timeout: 3000 });
      },
      err => {
        console.log("Error occured", err);
        this._flashMessagesService.show('Er is een probleem, probeer nog eens opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
      }
    );


  }

  hardDelete(){
    this.profilesService.forcedelete(this.creds.id).subscribe(
      res => {
        this.router.navigate(['']);
        this.authenticationService.logout();
        this._flashMessagesService.show('Uw profiel is permanent verwijderd!', { cssClass: 'alert-success', timeout: 3000 });
      },
      err => {
        console.log("Error occured", err);
        this._flashMessagesService.show('Er is een probleem, probeer nog eens opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
      }
    );
  }

  deleteModal(){
    $('.modal').css("display", 'block');
  }

}

