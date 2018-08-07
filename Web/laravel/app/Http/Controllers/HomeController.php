<?php

namespace EDS_site\Http\Controllers;

use Illuminate\Http\Request;
use EDS_site\Models\AskPractitioner;
use EDS_site\Models\Contact;
use EDS_site\Models\Practitioner;
use EDS_site\Models\ProfileMedical;
use EDS_site\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //charts
        $userByMonths  = User::select(\DB::raw('count(id) as `total`'), \DB::raw('YEAR(created_at) year, MONTHNAME(created_at) month'))
         ->groupby('year','month')
            ->get();

        $userByRoles  = User::join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->groupBy ('role_user.role_id')
            ->select(\DB::raw('count(users.id) as `total`'), \DB::raw('roles.name as role'))
            ->groupby('roles.id')
               ->get();

        // lists
        $askpractitioners = AskPractitioner::where('answered', false)
        ->orderBy('created_at','desc')
        ->paginate(10);


        $contact = Contact::where('answered', false)
        ->orderBy('created_at','desc')
        ->paginate(10);


        $users_count = User::count();
        $practitioners_count = Practitioner::count();
        $medicalprofiles_count = ProfileMedical::count();


        return view('home', compact('askpractitioners', 'contact', 'userByMonths', 'userByRoles', 'users_count', 'practitioners_count', 'medicalprofiles_count'));
    }
}
