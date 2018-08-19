import { Injectable } from '@angular/core';
import { HttpClient,  HttpErrorResponse } from '@angular/common/http';
import { Observable } from 'rxjs';

import { environment } from '../../../../environments/environment';
import { IContact } from '../models/icontact';
import { HttpHeaders } from '@angular/common/http';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/Rx';


import { catchError, retry } from 'rxjs/operators';


@Injectable()
export class ContactService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.contact;

  constructor(private _httpClient: HttpClient,
  private http: Http) { }


  postContact(contact) {

    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
      })
    };
  
    return this._httpClient.post<IContact>(`${ this._apiEndPoint }`, JSON.stringify(contact), httpOptions)
  }


  // postContact(creds){
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };

  //   var body = JSON.stringify(creds);
  
  //   return this._httpClient.post<IContact>(`${ this._apiEndPoint }`, body, httpOptions)
  // }  


}
