<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeExercisetherapy extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function exercisetherapies()
    {
        return $this->belongsToMany(Exercisetherapy::class);
    }
}