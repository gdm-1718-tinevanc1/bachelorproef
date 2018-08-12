<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
