<?php

namespace EDS_site\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\RedirectResponse;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, ...$guards)
    {

       // $this->checkAdmin($guards);
        //return $next($request);


        /**
         * Handle a login request to the application.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
         */
        if ( !Auth::user()->isAdmin() )
        {
            auth()->logout();
            return redirect()->back()->withErrors('Meld je aan als admin');
        }

        return $next($request);

 /*

        if ( Auth::guard($guards)->check() && Auth::user()->isAdmin() )
        {
            return $next($request);
        }

        else{

            //$this->incrementLoginAttempts($request);

            // return $this->sendFailedLoginResponse($request);

            return redirect('/backoffice/login');
        }*/

    }


    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function checkAdmin(array $guards)
    {
        if ( Auth::guard($guards)->check() && Auth::user()->isAdmin() ){
            return $this->auth->authenticate();
        }

        throw new AuthenticationException('Unauthenticated.', $guards);

        /*foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }*/

    }


}


