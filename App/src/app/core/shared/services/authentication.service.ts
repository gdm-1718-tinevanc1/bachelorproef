import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import { HttpHeaders } from '@angular/common/http';

import { environment } from '../../../../environments/environment';
import { IUser } from '../models/iuser';
import { Router } from '@angular/router'; 
import { FlashMessagesService } from 'angular2-flash-messages';


@Injectable()
export class AuthenticationService {

  user = {
    user: {},
    authenticated: false,
    errormessage: "",
    role: ""
  }

  private httpOptions = {
    headers: new HttpHeaders({
      'Content-Type':  'application/json',
    })
  };

  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.login;
  private _apiEndPoint_register = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.users;
  private _apiEndPointForgotPassword = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.forgotpassword;
  private _apiEndPointResetPassword = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.resetpassword;

  constructor(private _httpClient: HttpClient,
    private router: Router,
    private _flashMessagesService: FlashMessagesService) { }

  login(creds) {
    return this._httpClient.post<IUser>(`${ this._apiEndPoint }`, JSON.stringify(creds), this.httpOptions).subscribe(
      result => {
        this.user.user = result;
        if(this.user.user[0].id === undefined || this.user.user[0].id === null){
          this.user.errormessage =  "De gebruikersnaam of wachtwoord die je hebt ingegeven is niet correct." ;
          this._flashMessagesService.show('De gebruikersnaam of wachtwoord die je hebt ingegeven is niet correct.', { cssClass: 'alert-error', timeout: 3000 });
        } else {
          localStorage.setItem('id', result[0].id);
          localStorage.setItem('role', result[0].roles[0].name);
          this.user.authenticated = true;
          this.user.role = result[0].roles[0].name;
          window.location.reload();
          this.router.navigate(['']);
        }
      },
      err => {
        this._flashMessagesService.show('Er is een probleem, probeer opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
        console.log("Error occured:", err);
      }
    )
  }

  logout() {
    localStorage.removeItem('id');
    this.user.authenticated = false;
    window.location.reload();
    this.router.navigate(['']);

  }


  register (creds) {
    return this._httpClient.post<IUser>(`${ this._apiEndPoint_register }`, JSON.stringify(creds), this.httpOptions).subscribe(
      result => {
        this.user.user = result;
        console.log(result);
        localStorage.setItem('id', result.id);

        if(creds.rolePractitioner == true){
          localStorage.setItem('role', 'Behandelaar');
        } else{
          localStorage.setItem('role', 'Patiënt');
        }
      
        // localStorage.setItem('role', result[0].roles[0].name);

        this.user.authenticated = true;
        window.location.reload();
        this.router.navigate(['']);
      },
      err => {
        console.log("Error occured", err);
        this._flashMessagesService.show('Er is een probleem, probeer opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
      }
    )
  }

  checkAuth() {
    let jwt = localStorage.getItem('id');
    if(jwt) {
        this.user.authenticated = true;
        this.user.role = localStorage.getItem('role');
    }
    else {
        this.user.authenticated = false;
        this.user.role = '';
    }
  }

  

  forgotpassword(creds) {
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
      })
    };
    
    return this._httpClient.post(`${ this._apiEndPointForgotPassword }`, JSON.stringify(creds), httpOptions)
  }


  resetpassword(creds){
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
      })
    };
    
    return this._httpClient.post(`${ this._apiEndPointResetPassword }`, JSON.stringify(creds), httpOptions)
  }


  // login(creds) {
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };

  //   var body = JSON.stringify(creds);

  //   return this._httpClient.post<IUser>(`${ this._apiEndPoint }`, body, httpOptions).subscribe(
  //     result => {
  //       this.user.user = result;
  //       if(this.user.user[0].id === undefined || this.user.user[0].id === null){
  //         this.user.errormessage =  "De gebruikersnaam of wachtwoord die je hebt ingegeven is niet correct." ;
  //         this._flashMessagesService.show('De gebruikersnaam of wachtwoord die je hebt ingegeven is niet correct.', { cssClass: 'alert-error', timeout: 3000 });
  //       } else {
  //         localStorage.setItem('id', result[0].id);
  //         localStorage.setItem('role', result[0].roles[0].name);
  //         this.user.authenticated = true;
  //         this.user.role = result[0].roles[0].name;
  //         window.location.reload();
  //         this.router.navigate(['']);
  //       }
  //     },
  //     err => {
  //       this._flashMessagesService.show('Er is een probleem, probeer opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
  //       console.log("Error occured:", err);
  //     }
  //   )
  // }



  // register (creds) {
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };


  //   var body = JSON.stringify(creds);


  //   return this._httpClient.post<IUser>(`${ this._apiEndPoint_register }`, body, httpOptions).subscribe(
  //     result => {
  //       this.user.user = result;

  //       localStorage.setItem('id', result.id);

  //       if(creds.rolePractitioner == true){
  //         localStorage.setItem('role', 'Behandelaar');
  //       } else{
  //         localStorage.setItem('role', 'Patiënt');
  //       }

  //       this.user.authenticated = true;
  //       window.location.reload();
  //       this.router.navigate(['']);
  //     },
  //     err => {
  //       console.log("Error occured", err);
  //       this._flashMessagesService.show('Er is een probleem, probeer opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
  //     }
  //   )
  // }


  // forgotpassword(creds) {
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };

  //   var body = JSON.stringify(creds);

    
  //   return this._httpClient.post(`${ this._apiEndPointForgotPassword }`, body, httpOptions)
  // }



  // resetpassword(creds){
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };
  //   let body = JSON.stringify(creds);

    
  //   return this._httpClient.post(`${ this._apiEndPointResetPassword }`, body, httpOptions)
  // }  

}


 