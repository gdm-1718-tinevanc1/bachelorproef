<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function typeDisease()
    {
        return $this->belongsTo(TypeDisease::class);
    }

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function exercisesexample()
    {
        return $this->belongsTo(TypeExercisesexample::class);
    }

    public function exercisetherapy()
    {
        return $this->belongsTo(Exercisetherapy::class);
    }
}
