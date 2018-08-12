<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Location;
use EDS_site\Models\Country;
use EDS_site\Models\Profile;
use EDS_site\Models\Role;
use EDS_site\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(['admin', 'auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all();

    
        $sort = $request->input('sort');
        $search = $request->input('search');
        $selectedRole = $request->input('role');

        $query = Profile::orderBy('created_at','desc');

        switch($sort) {
            case 'lastname':
                $query->orderBy('lastname','asc');
                break;
            case 'email':
                $query->join('users', 'users.profile_id', '=', 'profiles.id')->orderBy('users.email', 'asc')->select('profiles.*');
                break;
            case 'location':
                $query->join('locations', 'profiles.location_id', '=', 'locations.id')->join('countries', 'locations.country_id', '=', 'countries.id')->orderBy('countries.name', 'asc')->orderBy('locations.city', 'asc')->select('profiles.*');
                break;
            case 'role':
                $query->join('users', 'users.profile_id', '=', 'profiles.id')->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')->orderBy('roles.name', 'asc')->select('profiles.*');
                break;
            default:
                $query->orderBy('created_at','desc');
        }

        if ($request->has('search') && $request->has('search') !== '')
        {
            $query->where(function ($q) use ($request)
            {
                return $q->where('firstname', 'LIKE', $request->input('search') . '%')
                    ->orWhere('lastname', 'LIKE', '%' . $request->input('search') . '%');
            });
        }

        if ($request->has('role'))
        {
            if($request->input('role') !== 'all'){
                $query->with('user')->whereHas('user.roles', function($q) use($request) {
                    $q->where('id', $request->input('role'));
                });
            }
        }

        $users = $query->paginate(15);

        return view('users.index', compact('roles','users', 'selectedRole', 'search'));
    }


    public function show(Profile $user){
        return view('users.show', compact('user'));
    }

    public function create(){
        $countries = Country::all();
        $roles = Role::all();
        return view('users.create',  compact('countries', 'roles'));
    }
    public function store(User $user){

        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'rizivnumber' => 'required',
            'function' => 'required',
            'street' => 'required',
            'housenumber' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country_id' => 'required'
        ]);

        $location = new Location([
            'street' => request('street'),
            'housenumber' => request('housenumber'),
            'zipcode' => request('zipcode'),
            'city' => request('city'),
            'country_id' => request('country_id')
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

        
        $user = new User([
            'username' => request('username'),
            'email' => request('email'),
            'password' =>  bcrypt(request('password')),
            'profile_id' => $profile_id
        ]);
        $user->save();

        if (is_array('role_id'))
        {
            foreach (request('role_id') as $role){
                $user->roles()->attach($role);
            }
        }
        else{
            $user->roles()->attach(request('role_id'));
        }

        session()->flash('message', 'Je hebt een gebruiker toegevoegd.');

        return redirect('/users');
    }

    public function edit($id)
    {
        $countries = Country::all();
        $roles = Role::all();
        $user = User::find($id);
        return view('users.edit', compact('user', 'countries', 'roles'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'rizivnumber' => 'required',
            'function' => 'required',
            'street' => 'required',
            'housenumber' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country_id' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->username   = request('username');
        $user->password =  bcrypt(request('password'));
        $user->email = request('email');
        $user->save();

        if (is_array('role_id'))
        {
            $user->roles()->detach();
            foreach (request('role_id') as $role){
                $user->roles()->attach($role);
            }
        }
        else{
            $user->roles()->detach();
            $user->roles()->attach(request('role_id'));
        }


        $profile = Profile::where('id', '=', $user->profile_id)->first();
        $profile->firstname   = request('firstname');
        $profile->lastname = request('lastname');
        $profile->phonenumber = request('phonenumber');
        $profile->rizivnumber = request('rizivnumber');
        $profile->function = request('function');
        $profile->save();

        $location = Location::where('id', '=', $profile->location_id)->first();
        $location->street   = request('street');
        $location->housenumber = request('housenumber');
        $location->zipcode = request('zipcode');
        $location->city = request('city');
        $location->country_id = request('country_id');
        $location->save();

        session()->flash('message', 'Je hebt een gebruiker aangepast.');

        return redirect('/users');
    }


    public function delete($id){
        $user = User::find($id);
        return view('users.destroy', compact('user'));

    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('message', 'Je hebt een gebruiker verwijderd.');

        return redirect('/users');
    }
}
