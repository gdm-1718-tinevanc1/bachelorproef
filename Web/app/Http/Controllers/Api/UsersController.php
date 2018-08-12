<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\Profile;
use EDS_site\User;
use EDS_site\Models\Location;
use EDS_site\Models\ProfileMedical;
use EDS_site\Models\ProfilePain;
use EDS_site\Models\ProfileBrace;
use EDS_site\Models\ProfileWalktool;
use EDS_site\Models\ProfileLuxation;
use EDS_site\Models\Role;
use EDS_site\Models\Country;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return User::all(); 
    }

    public function show($id){

        $user = User::with('profile')
        ->with('profile.location')
        ->with('profile.profileMedical')
        ->with('profile.profileMedical.profilePain')
        ->with('profile.profileMedical.profileLuxation')
        ->with('profile.profileMedical.profileWalktool')
        ->with('profile.profileMedical.profileBrace')
        ->with('profile.location.country')
        ->with('roles')
        ->find($id);

        return $user ?: response()
            ->json([
                'error' => "User `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    public function store(User $user, Request $request){
        $this->validate(request(), [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);


        $location = new Location([
            'city' => request('city'),
            'country_id' => request('country_id'),
        ]);
        $location->save();
        $location_id = $location->getAttribute('id');

        $profile = new Profile([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'phonenumber' => request('phonenumber'),
            'rizivnumber' => request('rizivnumber'),
            'function' => request('function'),
            'location_id' => $location_id,
        ]);

        $profile->save();
        $profile_id = $profile->getAttribute('id');
        // die(request());

        $user = new User([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'profile_id' => $profile_id,
        ]);
        
        if ($user->save()) {
            $role;
            if(request('rolePractitioner') == 'true'){
                $role = Role::where('name', 'Behandelaar')->first();
            } else {
                $role = Role::where('name', 'Patiënt')->first();
            }
            $role_id = $role->getAttribute('id');
            $user->roles()->attach($role_id);

            return response()
                ->json($user);
            //     // ->setStatusCode(Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $rules =  [
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'profile.firstname' => 'required',
            'profile.lastname' => 'required',
            'profile.phonenumber' => 'required',
            'profile.location.city' => 'required',
            'profile.location.country_id' => 'required|numeric',
        ];


        $validator = \Validator::make($request->input(), $rules);

        $this->validate($request, $rules);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all(),
                ])
                ->setStatusCode(Response::HTTP_BAD_REQUEST);
        }

        $user = User::find($id);
        $user->username  = request('username');
        $user->email = request('email');
        $user->save();
  
    

        $location_id = $profile->getAttribute('location_id');
        $location = Location::find($location_id);
        $location->street = $request->input('profile.location.street');
        $location->housenumber = $request->input('profile.location.housenumber');
        $location->city = $request->input('profile.location.city');;
        $location->zipcode = $request->input('profile.location.zipcode');
        $location->country_id = $request->input('profile.location.country_id');
        $location->save();


        $profile_pain_id = $profile_medical->getAttribute('profile_pain_id');
        $profile_pain = ProfileMedical::find($profile_pain_id);
        if(empty($profile_pain)){
            $profile_pain = new ProfilePain;
        } else {
            $profile_pain = ProfilePain::find($profile_pain_id);
        }
        $profile_pain->shoulderjoint_left = $request->input('profile.profile_medical.profile_pain.shoulderjoint_left');
        $profile_pain->shoulderjoint_right = $request->input('profile.profile_medical.profile_pain.shoulderjoint_right');
        $profile_pain->shoulderbelt_left = $request->input('profile.profile_medical.profile_pain.shoulderbelt_left');
        $profile_pain->shoulderbelt_right = $request->input('profile.profile_medical.profile_pain.shoulderbelt_right');
        $profile_pain->elbow_left = $request->input('profile.profile_medical.profile_pain.elbow_left');
        $profile_pain->elbow_right = $request->input('profile.profile_medical.profile_pain.elbow_right');
        $profile_pain->upperarm_left = $request->input('profile.profile_medical.profile_pain.upperarm_left');
        $profile_pain->upperarm_right = $request->input('profile.profile_medical.profile_pain.upperarm_right');
        $profile_pain->underarm_left = $request->input('profile.profile_medical.profile_pain.underarm_left');
        $profile_pain->underarm_right = $request->input('profile.profile_medical.profile_pain.underarm_right');
        $profile_pain->wristjoint_left = $request->input('profile.profile_medical.profile_pain.wristjoint_left');
        $profile_pain->wristjoint_right = $request->input('profile.profile_medical.profile_pain.wristjoint_right');
        $profile_pain->knuckles_left = $request->input('profile.profile_medical.profile_pain.knuckles_left');
        $profile_pain->knuckles_right = $request->input('profile.profile_medical.profile_pain.knuckles_right');
        $profile_pain->thumbbase_left = $request->input('profile.profile_medical.profile_pain.thumbbase_left');
        $profile_pain->thumbbase_right = $request->input('profile.profile_medical.profile_pain.thumbbase_right');
        $profile_pain->buttock_left = $request->input('profile.profile_medical.profile_pain.buttock_left');
        $profile_pain->buttock_right = $request->input('profile.profile_medical.profile_pain.buttock_right');
        $profile_pain->knee_left = $request->input('profile.profile_medical.profile_pain.knee_left');
        $profile_pain->knee_right = $request->input('profile.profile_medical.profile_pain.knee_right');
        $profile_pain->ankle_left = $request->input('profile.profile_medical.profile_pain.ankle_left');
        $profile_pain->ankle_right = $request->input('profile.profile_medical.profile_pain.ankle_right');
        $profile_pain->foot_left = $request->input('profile.profile_medical.profile_pain.foot_left');
        $profile_pain->foot_right = $request->input('profile.profile_medical.profile_pain.foot_right');  
        $profile_pain->toes_left = $request->input('profile.profile_medical.profile_pain.toes_left');
        $profile_pain->toes_right = $request->input('profile.profile_medical.profile_pain.toes_right');
        $profile_pain->neck = $request->input('profile.profile_medical.profile_pain.neck');
        $profile_pain->jaw_left = $request->input('profile.profile_medical.profile_pain.jaw_left');
        $profile_pain->jaw_right = $request->input('profile.profile_medical.profile_pain.jaw_right');
        $profile_pain->lowerback = $request->input('profile.profile_medical.profile_pain.lowerback');
        $profile_pain->upperback = $request->input('profile.profile_medical.profile_pain.upperback');
        $profile_pain->chest = $request->input('profile.profile_medical.profile_pain.chest');  
        $profile_pain->belly = $request->input('profile.profile_medical.profile_pain.belly'); 
        $profile_pain->save();


        $profile_brace_id = $profile_medical->getAttribute('profile_brace_id');
        $profile_brace = ProfileBrace::find($profile_brace_id);
        if(empty($profile_brace)){
            $profile_brace = new ProfileBrace;
        } else {
            $profile_brace = ProfileBrace::find($profile_brace_id);
        }
        $profile_brace->neckcollar = $request->input('profile.profile_medical.profile_brace.neckcollar');
        $profile_brace->shoulderbrace = $request->input('profile.profile_medical.profile_brace.shoulderbrace');
        $profile_brace->pressure_upper = $request->input('profile.profile_medical.profile_brace.pressure_upper');
        $profile_brace->pressure_under = $request->input('profile.profile_medical.profile_brace.pressure_under');
        $profile_brace->kneebrace = $request->input('profile.profile_medical.profile_brace.kneebrace');
        $profile_brace->anklebrace = $request->input('profile.profile_medical.profile_brace.anklebrace');
        $profile_brace->supportsoles = $request->input('profile.profile_medical.profile_brace.supportsoles');
        $profile_brace->silversplints = $request->input('profile.profile_medical.profile_brace.silversplints');
        $profile_brace->wristbrace = $request->input('profile.profile_medical.profile_brace.wristbrace');
        $profile_brace->corset = $request->input('profile.profile_medical.profile_brace.corset');
        $profile_brace->bandlowback = $request->input('profile.profile_medical.profile_brace.bandlowback');
        $profile_brace->stockings = $request->input('profile.profile_medical.profile_brace.stockings');
        $profile_brace->save();

        $profile_walktool_id = $profile_medical->getAttribute('profile_walktool_id');
        $profile_walktool = ProfileWalktool::find($profile_walktool_id);
        if(empty($profile_walktool)){
            $profile_walktool = new ProfileWalktool;
        } else {
            $profile_walktool = ProfileWalktool::find($profile_walktool_id);
        }
        $profile_walktool->wheelchair = $request->input('profile.profile_medical.profile_walktool.wheelchair');
        $profile_walktool->elecwheelchair = $request->input('profile.profile_medical.profile_walktool.elecwheelchair');
        $profile_walktool->balancebike = $request->input('profile.profile_medical.profile_walktool.balancebike');
        $profile_walktool->crutch = $request->input('profile.profile_medical.profile_walktool.crutch');
        $profile_walktool->save();

        $profile_luxation_id = $profile_medical->getAttribute('profile_luxation_id');
        $profile_luxation = ProfileLuxation::find($profile_luxation_id);
        if(empty($profile_luxation)){
            $profile_luxation = new ProfileLuxation;
        } else {
            $profile_luxation = ProfileLuxation::find($profile_luxation_id);
        }
        
        $profile_luxation->pelvicjoint = $request->input('profile.profile_medical.profile_luxation.pelvicjoint');
        $profile_luxation->hip = $request->input('profile.profile_medical.profile_luxation.hip');
        $profile_luxation->knee = $request->input('profile.profile_medical.profile_luxation.knee');
        $profile_luxation->ankle = $request->input('profile.profile_medical.profile_luxation.ankle');
        $profile_luxation->metatarsalbone = $request->input('profile.profile_medical.profile_luxation.metatarsalbone');
        $profile_luxation->toes = $request->input('profile.profile_medical.profile_luxation.toes');
        $profile_luxation->lowback = $request->input('profile.profile_medical.profile_luxation.lowback');
        $profile_luxation->highback = $request->input('profile.profile_medical.profile_luxation.highback');
        $profile_luxation->ribs = $request->input('profile.profile_medical.profile_luxation.ribs');
        $profile_luxation->neck = $request->input('profile.profile_medical.profile_luxation.neck');
        $profile_luxation->jaws = $request->input('profile.profile_medical.profile_luxation.jaws');
        $profile_luxation->shoulder = $request->input('profile.profile_medical.profile_luxation.shoulder');
        $profile_luxation->elbow = $request->input('profile.profile_medical.profile_luxation.elbow');
        $profile_luxation->wrist = $request->input('profile.profile_medical.profile_luxation.wrist');
        $profile_luxation->metacarpal = $request->input('profile.profile_medical.profile_luxation.metacarpal');
        $profile_luxation->fingers = $request->input('profile.profile_medical.profile_luxation.fingers');
        $profile_luxation->save();

        $profile_medical_id = $profile->getAttribute('profile_medical_id');
        $profile_medical = ProfileMedical::find($profile_medical_id);
        if(empty($profile_medical)){
            $profile_medical = new ProfileMedical;
        } else {
            $profile_medical = ProfileMedical::find($profile_medical_id);
        }
        $profile_medical->howfar = $request->input('profile.profile_medical.howfar');
        $profile_medical->note = $request->input('profile.profile_medical.note');
        $profile_medical->profile_walktool_id = $profile_walktool->getAttribute('id');
        $profile_medical->profile_brace_id = $profile_brace->getAttribute('id');
        $profile_medical->profile_pain_id = $profile_pain->getAttribute('id');
        $profile_medical->profile_luxation_id =  $profile_luxation->getAttribute('id');
        $profile_medical->save();

        $profile_id = $user->getAttribute('profile_id');
        $profile = Profile::find($profile_id);
        $profile->firstname = $request->input('profile.firstname');
        $profile->lastname = $request->input('profile.lastname');
        $profile->phonenumber = $request->input('profile.phonenumber');
        $profile->rizivnumber = $request->input('profile.rizivnumber');
        $profile->function = $request->input('profile.function');
        $profile->profile_medical_id = $profile_medical->getAttribute('id');
        $profile->save();
    }

    public function destroy($id){
        $user = User::find($id);
        if ($user) {
            $profile_id = $user->profile_id;
            $profile = Profile::find($profile_id);

            if ($user->delete()) {
                $profile->delete();
                return response()
                    ->json($user);
            }

            return response()
                ->json([
                    'error' => "User `${id}` could not be deleted",
                ]);
        }

        return response()
            ->json([
                'error' => "User `${id}` not found",
            ]);
    }


    public function forceDelete($id){
        $user = User::find($id);
        if ($user) {
            $profile_id = $user->profile_id;
            $profile = Profile::find($profile_id);

            if ($user->forceDelete()) {
                $profile->forceDelete();
                return response()
                    ->json($user);
            }

            return response()
                ->json([
                    'error' => "User `${id}` could not be deleted",
                ]);
        }

        return response()
            ->json([
                'error' => "User `${id}` not found",
            ]);
    }
    
}
