<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Right extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function right()
    {
        return $this->hasOne(Right::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function typeAgency()
    {
        return $this->belongsTo(TypeAgency::class);
    }
}
