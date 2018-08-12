import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IDisease } from '../models/idisease';

@Injectable()
export class DiseaseService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.diseases;
  constructor(private _httpClient: HttpClient) { }

  getDiseases():Observable<Array<IDisease>> {
    return this._httpClient.get<Array<IDisease>>(`${ this._apiEndPoint }`);
  }

  getDiseasesById(id: number):Observable<IDisease> {
    return this._httpClient.get<IDisease>(`${ this._apiEndPoint + '/' + id }`);
  }

}
