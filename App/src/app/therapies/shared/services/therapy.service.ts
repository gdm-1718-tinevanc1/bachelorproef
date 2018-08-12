import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IExample } from '../models/iexample';
import { IExercise } from '../models/iexercise';
import { IManual } from '../models/imanual';
import { ITypeExample } from '../models/itypeexample';
import { ITypeExercise } from '../models/itypeexercise';

@Injectable()
export class TherapyService {
  private _apiEndPointExample = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.exercisesexamples;
  private _apiEndPointExercise = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.exercisetherapies;
  private _apiEndPointManual = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.manualtherapies;

  private _apiEndPointTypeExample = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.typeexercisesexamples;
  private _apiEndPointTypeExercise = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.typeexercisetherapies;

  constructor(private _httpClient: HttpClient) { }

  getExamples():Observable<Array<IExample>> {
    return this._httpClient.get<Array<IExample>>(`${ this._apiEndPointExample }`);
  }

  getExamplesById(id: number):Observable<IExample> {
    return this._httpClient.get<IExample>(`${ this._apiEndPointExample + '/' + id }`);
  }

  getExercises():Observable<Array<IExercise>> {
    return this._httpClient.get<Array<IExercise>>(`${ this._apiEndPointExercise }`);
  }

  getExercisesById(id: number):Observable<IExercise> {
    return this._httpClient.get<IExercise>(`${ this._apiEndPointExercise + '/' + id }`);
  }

  getManuals():Observable<Array<IManual>> {
    return this._httpClient.get<Array<IManual>>(`${ this._apiEndPointManual }`);
  }

  getManualsById(id: number):Observable<IManual> {
    return this._httpClient.get<IManual>(`${ this._apiEndPointManual + '/' + id }`);
  }

  getExamplesByType(type: string):Observable<Array<IExample>> {
    return this._httpClient.get<Array<IExample>>(`${ this._apiEndPointExample + '/type=' + type }`);
  }

  getExercisesByType(type: string):Observable<Array<IExercise>> {
    return this._httpClient.get<Array<IExercise>>(`${ this._apiEndPointExercise + '/type=' + type }`);
  }

  getExamplesTypes():Observable<Array<ITypeExample>> {
    return this._httpClient.get<Array<ITypeExample>>(`${ this._apiEndPointTypeExample }`);
  }

  getExercisesTypes():Observable<Array<ITypeExercise>> {
    return this._httpClient.get<Array<ITypeExercise>>(`${ this._apiEndPointTypeExercise }`);
  }

}






