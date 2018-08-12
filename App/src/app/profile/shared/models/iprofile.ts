export class IProfile {
    id: number|null;
    username: string;
    email: string;
    profile:  {
      firstname: string;
      lastname: string;
      phonenumber: string;
      location: {
        city: string;
        zipcode: string;
        street: string;
        housenumber: string;
        country_id: number,
      },
      rizivnumber: string;
      function: string;
      profile_medical: {
        howfar: string;
        note: string;
        profile_pain: {
          shoulderjoint_left: string;
          shoulderjoint_right: string;
          shoulderbelt_left: string;
          shoulderbelt_right: string;
          elbow_left: string;
          elbow_right: string;
          upperarm_left: string;
          upperarm_right: string;
          underarm_left: string;
          underarm_right: string;
          wristjoint_left: string;
          wristjoint_right: string;
          knuckles_left: string;
          knuckles_right: string;
          thumbbase_left: string;
          thumbbase_right: string;
          fingerjoints_left: string;
          fingerjoints_right: string;
          hipjoint_left: string;
          hipjoint_right: string;
          buttock_left: string;
          buttock_right: string;
          knee_left: string;
          knee_right: string;
          ankle_left: string;
          ankle_right: string;
          foot_left: string;
          foot_right: string;
          toes_left: string;
          toes_right: string;
          neck: string;
          jaw_left: string;
          jaw_right: string;
          lowerback: string;
          upperback: string;
          chest: string;
          belly: string;        
        },
        profile_brace: {
          neckcollar: string;
          shoulderbrace: string;
          pressure_upper: string;
          pressure_under: string;
          kneebrace: string;
          anklebrace: string;
          supportsoles: string;
          silversplints: string;
          wristbrace: string;
          corset: string;
          bandlowback:string;
          stockings:string;
        },
        profile_walktool: {
          wheelchair: string;
          elecwheelchair: string;
          balancebike: string;
          crutch:string;
        },
        profile_luxation:{
          pelvicjoint: string;
          hip: string;
          knee: string;
          ankle: string;
          metatarsalbone: string;
          toes: string;
          lowback: string;
          highback: string;
          ribs: string;
          neck: string;
          jaws: string;
          shoulder: string;
          elbow: string;
          wrist: string;
          metacarpal: string;
          fingers:string;
        }
      }
    }
}
