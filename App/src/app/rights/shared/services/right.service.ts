import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IRight } from '../models/iright';
import { ITypeAgency } from '../models/itypeagency';

@Injectable()
export class RightService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.rights;
  private _apiEndPointType = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.typeagencies;

  constructor(private _httpClient: HttpClient) { }

  getRights():Observable<Array<IRight>> {
    return this._httpClient.get<Array<IRight>>(`${ this._apiEndPoint }`);
  }

  getRightsById(id: number):Observable<IRight> {
    return this._httpClient.get<IRight>(`${ this._apiEndPoint + '/' + id }`);
  }

  getExercisesByAgency(type: string):Observable<Array<IRight>> {
    return this._httpClient.get<Array<IRight>>(`${ this._apiEndPoint + '/type=' + type }`);
  }

  getRightsTypes(country_id):Observable<Array<ITypeAgency>> {
    return this._httpClient.get<Array<ITypeAgency>>(`${ this._apiEndPointType  + '/country=' + country_id  }`);
  }

}




