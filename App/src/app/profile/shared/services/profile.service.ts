import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

import { environment } from '../../../../environments/environment';
import { IProfile } from '../models/iprofile';
import { HttpHeaders } from '@angular/common/http';

@Injectable()
export class ProfileService {
  profile_medical = {
    howfar: '',
    note: '',
    profile_pain: {
      shoulderjoint_left: '',
      shoulderjoint_right: '',
      shoulderbelt_left: '',
      shoulderbelt_right: '',
      elbow_left: '',
      elbow_right: '',
      upperarm_left: '',
      upperarm_right: '',
      underarm_left: '',
      underarm_right: '',
      wristjoint_left: '',
      wristjoint_right: '',
      knuckles_left: '',
      knuckles_right: '',
      thumbbase_left: '',
      thumbbase_right: '',
      fingerjoints_left: '',
      fingerjoints_right: '',
      hipjoint_left: '',
      hipjoint_right: '',
      buttock_left: '',
      buttock_right: '',
      knee_left: '',
      knee_right: '',
      ankle_left: '',
      ankle_right: '',
      foot_left: '',
      foot_right: '',
      toes_left: '',
      toes_right: '',
      neck: '',
      jaw_left: '',
      jaw_right: '',
      lowerback: '',
      upperback: '',
      chest: '',
      belly: ''
    },
    profile_brace: {
      neckcollar: '',
      shoulderbrace: '',
      pressure_upper: '',
      pressure_under: '',
      kneebrace: '',
      anklebrace: '',
      supportsoles: '',
      silversplints: '',
      wristbrace: '',
      corset: '',
      bandlowback:'',
      stockings: ''
    },
    profile_walktool: {
      wheelchair: '',
      elecwheelchair: '',
      balancebike: '',
      crutch: ''
    },
    profile_luxation:{
      pelvicjoint: '',
      hip: '',
      knee: '',
      ankle: '',
      metatarsalbone: '',
      toes: '',
      lowback: '',
      highback: '',
      ribs: '',
      neck: '',
      jaws: '',
      shoulder: '',
      elbow: '',
      wrist: '',
      metacarpal: '',
      fingers: ''
    }
  }


  private _apiEndPoint = environment.bachelorAPI.url + environment.bachelorAPI.endPoints.users;
  constructor(private _httpClient: HttpClient) { }

  getProfiles():Observable<Array<IProfile>> {
    return this._httpClient.get<Array<IProfile>>(`${ this._apiEndPoint }`);
  }

  getProfilesById(id: number):Observable<IProfile> {
    return this._httpClient.get<IProfile>(`${ this._apiEndPoint + '/' + id }`);
  }


  save (creds){
    if (creds.id) {
        return this.put(creds);
    } 
    return this.post(creds)
  }

  private post(creds) {
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
      })
    };
    
    return this._httpClient.post<IProfile>(`${ this._apiEndPoint }`, creds, httpOptions)

  }


  private put(creds) {
    let httpOptions = new Headers({
      'Content-Type': 'application/json'
    });
    
    return this._httpClient.put<IProfile>(`${ this._apiEndPoint + '/' + creds.id }`, creds )

  }



  public softdelete(id) {
    return this._httpClient.delete<IProfile>(`${ this._apiEndPoint + '/' + id }` )

  }

  public forcedelete(id) {
    return this._httpClient.delete<IProfile>(`${ this._apiEndPoint + '/destroy/' + id }` )

  }

//   private post(creds) {
//     const httpOptions = {
//       headers: new HttpHeaders({
//         'Content-Type':  'application/x-www-form-urlencoded',
//       })
//     };

//     var body = JSON.stringify(creds);
    
//     return this._httpClient.post<IProfile>(`${ this._apiEndPoint }`, body, httpOptions)

//   }

//  private put(creds) {
//     const httpOptions = {
//       headers: new HttpHeaders({
//         'Content-Type':  'text/plain',
//       })
//     };

//     var body = JSON.stringify(creds);

    
//     return this._httpClient.put<IProfile>(`${ this._apiEndPoint + '/' + creds.id }`, body, httpOptions )

//   }
    // public softdelete(id) {
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };

  //   return this._httpClient.delete<IProfile>(`${ this._apiEndPoint + '/' + id }`, httpOptions )

  // }

  // public forcedelete(id) {
  //   const httpOptions = {
  //     headers: new HttpHeaders({
  //       'Content-Type':  'application/x-www-form-urlencoded',
  //     })
  //   };

  //   return this._httpClient.delete<IProfile>(`${ this._apiEndPoint + '/destroy/' + id }`, httpOptions )

  // }

}

