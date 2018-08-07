<?php

namespace EDS_site;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * EDS_site\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'profile_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('EDS_site\Models\Role');
    }

    public function profile()
    {
        return $this->belongsTo('EDS_site\Models\Profile');
    }

    public function isAdmin(){
        //  || \Auth::user()->roles()->where('name', 'Kiesbeheerder')->exists(
        if(\Auth::user()->roles()->where('name', 'Admin')->exists()){
            return true;
        }
        else{
            return false;
        }
    }

}
