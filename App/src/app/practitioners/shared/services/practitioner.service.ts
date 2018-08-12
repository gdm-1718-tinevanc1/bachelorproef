import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IPractitioner } from '../models/ipractitioner';
import { ITypePractitioner } from '../models/itypepractitioner';
import { IAskPractitioner } from '../models/iaskpractitioner';
import { HttpHeaders } from '@angular/common/http';

@Injectable()
export class PractitionerService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.practitioners;
  private _apiEndPointType = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.typepractitioners;
  private _apiEndPointAsk = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.askpractitioners;

  constructor(private _httpClient: HttpClient) { }

  getPractitioners():Observable<Array<IPractitioner>> {
    return this._httpClient.get<Array<IPractitioner>>(`${ this._apiEndPoint }`);
  }

  getPractitionersById(id: number):Observable<IPractitioner> {
    return this._httpClient.get<IPractitioner>(`${ this._apiEndPoint + '/' + id }`);
  }

  getPractitionersTypes():Observable<Array<ITypePractitioner>> {
    return this._httpClient.get<Array<ITypePractitioner>>(`${ this._apiEndPointType }`);
  }

  postAskPractitioner(askPractitioner) {
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
      })
    };
    
    return this._httpClient.post<IAskPractitioner>(`${ this._apiEndPointAsk }`, JSON.stringify(askPractitioner), httpOptions)
  }
}






