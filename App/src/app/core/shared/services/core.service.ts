import { Injectable } from '@angular/core';
import {Observable} from 'rxjs';
import {Subject} from 'rxjs';

@Injectable()
export class CoreService {
  alert = '';
  
  private storageSub= new Subject<boolean>();
  constructor() { }

  watchStorage(): Observable<any> {
    return this.storageSub.asObservable();
  }

  setItem(key: string, data: any) {
    localStorage.setItem(key, data);
    this.storageSub.next(true);
  }

  removeItem(key) {
    localStorage.removeItem(key);
    this.storageSub.next(true);
  }

}
