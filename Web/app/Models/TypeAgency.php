<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeAgency extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function device()
    {
        return $this->hasOne(Device::class);
    }

    public function right()
    {
        return $this->hasOne(Right::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
