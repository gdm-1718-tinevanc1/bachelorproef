import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { INews } from '../models/inews';
import { ITypeNews } from '../models/itypenews';
import { HttpHeaders } from '@angular/common/http';

@Injectable()
export class NewsService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.news;
  private _apiEndPointType = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.typenews;

  constructor(private _httpClient: HttpClient) { }

  getNews():Observable<Array<INews>> {
    return this._httpClient.get<Array<INews>>(`${ this._apiEndPoint }`);
  
  }

  getNewsLast():Observable<INews> {
    return this._httpClient.get<INews>(`${ this._apiEndPoint  + '/last'}`);
  }
  
  getNewsById(id: number):Observable<INews> {
    return this._httpClient.get<INews>(`${ this._apiEndPoint + '/' + id }`);
  }

  getNewsByType(type: string):Observable<Array<INews>> {
    return this._httpClient.get<Array<INews>>(`${ this._apiEndPoint + '/type=' + type }`);
  }

  getNewsTypes():Observable<Array<ITypeNews>> {
    return this._httpClient.get<Array<ITypeNews>>(`${ this._apiEndPointType }`);
  }
}

