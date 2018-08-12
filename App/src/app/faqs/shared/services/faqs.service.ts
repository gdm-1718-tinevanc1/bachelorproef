import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IFaq } from '../models/ifaq';

@Injectable()
export class FaqsService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.faqs;

  constructor(private _httpClient: HttpClient) { }

  getFaqs():Observable<Array<IFaq>> {
    return this._httpClient.get<Array<IFaq>>(`${ this._apiEndPoint }`);
  }

  getFaqsById(id: number):Observable<IFaq> {
    return this._httpClient.get<IFaq>(`${ this._apiEndPoint + '/' + id }`);
  }

}


