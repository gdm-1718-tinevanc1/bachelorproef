import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IDevice } from '../models/idevice';

@Injectable()
export class DeviceService {
  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.devices;
  constructor(private _httpClient: HttpClient) { }

  getDevices():Observable<Array<IDevice>> {
    return this._httpClient.get<Array<IDevice>>(`${ this._apiEndPoint }`);
  }

  getDevicesByType(type: string):Observable<Array<IDevice>> {
    return this._httpClient.get<Array<IDevice>>(`${ this._apiEndPoint + '/type=' + type }`);
  }
  
  getDevicesById(id: number):Observable<IDevice> {
    return this._httpClient.get<IDevice>(`${ this._apiEndPoint + '/' + id }`);
  }
}
