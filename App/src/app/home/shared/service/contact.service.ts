import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IContact } from '../models/icontact';
import { HttpHeaders } from '@angular/common/http';

@Injectable()
export class ContactService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.contact;

  constructor(private _httpClient: HttpClient) { }

  postContact(contact) {

    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/x-www-form-urlencoded',
        'Access-Control-Allow-Headers':  '*',
        'Access-Control-Allow-Origin':  '*',
        'Access-Control-Allow-Methods':  '*',
      })
    };
  
    return this._httpClient.post<IContact>(`${ this._apiEndPoint }`, JSON.stringify(contact), httpOptions)
  }
}
