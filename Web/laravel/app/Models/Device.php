<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    // use Filterable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function typeAgency()
    {
        return $this->belongsTo(TypeAgency::class);
    }

    public function typePractitioners()
    {
        return $this->belongsToMany(TypePractitioner::class);
    }

    public function typeDevices()
    {
        return $this->belongsToMany(TypeDevice::class);
    }


    /*public function scopeByType($query, $val){
        return $query->where('typeDevices.name', $val);
    } */
}