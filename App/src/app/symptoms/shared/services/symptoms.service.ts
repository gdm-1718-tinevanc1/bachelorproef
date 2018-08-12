import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { ISymptom } from '../models/isymptom';

@Injectable()
export class SymptomsService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.symptoms;
  constructor(private _httpClient: HttpClient) { }

  getSymptoms():Observable<Array<ISymptom>> {
    return this._httpClient.get<Array<ISymptom>>(`${ this._apiEndPoint }`);
  }

  getSymptomsById(id: number):Observable<ISymptom> {
    return this._httpClient.get<ISymptom>(`${ this._apiEndPoint + '/' + id }`);
  }

}

