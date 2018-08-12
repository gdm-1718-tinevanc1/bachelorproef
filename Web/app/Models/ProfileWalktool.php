<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileWalktool extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profileMedical()
    {
        return $this->hasOne(ProfileMedical::class);
    }
}