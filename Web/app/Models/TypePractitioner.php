<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypePractitioner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function practitioners()
    {
        return $this->hasMany(Practitioner::class);
    }

    public function devices()
    {
        return $this->belongsToMany(Device::class);
    }
}