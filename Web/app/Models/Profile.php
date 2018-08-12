<?php

namespace EDS_site\Models;
use EDS_site\User;

use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function profileMedical()
    {
        return $this->belongsTo(ProfileMedical::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
