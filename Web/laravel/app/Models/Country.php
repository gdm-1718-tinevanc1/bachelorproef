<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function practitioner()
    {
        return $this->hasOne(Practitioner::class);
    }

    public function faq()
    {
        return $this->hasOne(Faq::class);
    }

    public function right()
    {
        return $this->hasOne(Right::class);
    }

    public function typeAgency()
    {
        return $this->hasOne(TypeAgency::class);
    }

    public function treatment()
    {
        return $this->hasOne(Treatment::class);
    }
}
