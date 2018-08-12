<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\User;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request){

        $username = request('username');
        $password = request('password');

        $passwordHashed = User::where('username', $username)
            ->value('password');


        if (\Hash::check($password, $passwordHashed)) {
            $user = User::where('username', $username)
                ->with('roles')
                ->get();

            return $user ?: response()
                ->json([
                    'error' => "Gebruiker `${$username}` is niet gevonden",
                ])
                ->setStatusCode(Response::HTTP_NOT_FOUND);
        } else {
            return "wachtwoord en gebruiker zijn niet samen gekend";
        }
    }
}
