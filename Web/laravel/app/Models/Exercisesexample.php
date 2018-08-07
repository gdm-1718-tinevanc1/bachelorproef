<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Exercisesexample extends Model
{
    // use Filterable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function typeExercisesexample()
    {
        return $this->belongsTo(TypeExercisesexample::class);
    }
}