import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { ICountry } from '../models/icountry';

@Injectable()
export class CountriesService {
  selectedCountry = 1;
  
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.countries;
  constructor(private _httpClient: HttpClient) { }

  getCountries():Observable<Array<ICountry>> {
    return this._httpClient.get<Array<ICountry>>(`${ this._apiEndPoint }`);
  }

}
