<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Practitioner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function typePractitioner()
    {
        return $this->belongsTo(TypePractitioner::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    
}
