<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function practitioners()
    {
        return $this->hasMany(Practitioner::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function askPractitioner()
    {
        return $this->belongsTo(AskPractitioner::class);
    }
}
