<?php

namespace EDS_site\Http\Controllers\api;

use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use EDS_site\User;


class ResetPasswordController extends Controller
{
    public function process(Request $request){

        $row =  DB::table('password_resets')->where(['email' => $request->email,'token' => $request->token]);
        if($row->count() < 1){
            return response()->json([
                'error' => 'Token of email is niet correct',
            ])
            ->setStatusCode(\Response::HTTP_NOT_FOUND);
        }   

        
        $user = User::where('email', $request->email)->first();
        $user->password  = bcrypt(request('password'));
        $user->save();

        $row->delete();
        
        return response()->json(['data' => 'Wachtwoord succesvol veranderd.']);

    }


}
