<?php
namespace EDS_site\Http\Controllers\Api;
use EDS_site\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use EDS_site\Mail\ForgotPassword;
use EDS_site\User;

class ForgotPasswordController extends Controller
{
	public function sendEmail(Request $request){
        if(!$this->validateEmail($request->email)){
            return response()->json([
                'error' => 'Email bestaat niet in onze database'
            ]);
        }

        $this->send($request->email);
        return response()->json([
            'data' => 'Reset email is succesvol verstuurd. Bekijk uw inbox.'
        ]); 
    }

    public function send($email){
        $oldToken = DB::table('password_resets')->where('email', $email)->first();
        if($oldToken){
            $token = $oldToken->token;
        } else{
            $token = str_random(60);
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => \Carbon\Carbon::now()
            ]);
        }

        Mail::to($email)->send(new ForgotPassword($token));
    }



    public function validateEmail($email){
        return !!User::where('email', $email)->first();
    }

}