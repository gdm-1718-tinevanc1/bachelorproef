<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Symptom extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function sources()
    {
        return $this->hasMany(Source::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
