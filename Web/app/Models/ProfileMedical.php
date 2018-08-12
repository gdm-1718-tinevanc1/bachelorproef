<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileMedical extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profileBrace()
    {
        return $this->belongsTo(ProfileBrace::class);
    }

    public function profileLuxation()
    {
        return $this->belongsTo(ProfileLuxation::class);
    }

    public function profilePain()
    {
        return $this->belongsTo(ProfilePain::class);
    }

    public function profileWalktool()
    {
        return $this->belongsTo(ProfileWalktool::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}