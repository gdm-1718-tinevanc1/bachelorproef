<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeDevice extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function devices()
    {
        return $this->belongsToMany(Device::class);
    }

}

