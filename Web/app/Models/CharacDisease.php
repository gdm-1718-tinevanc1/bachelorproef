<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CharacDisease extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}