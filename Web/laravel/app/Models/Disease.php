<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Disease extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function typesDiseases()
    {
        return $this->hasMany(TypeDisease::class);
    }

    public function characDiseases()
    {
        return $this->hasMany(CharacDisease::class);
    }
  
    public function sources()
    {
        return $this->hasMany(Source::class);
    }
}
