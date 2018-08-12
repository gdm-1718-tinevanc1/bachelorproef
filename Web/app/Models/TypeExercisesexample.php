<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeExercisesexample extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function exercisesexamples()
    {
        return $this->belongsToMany(TypeExercisesexample::class);
    }
}