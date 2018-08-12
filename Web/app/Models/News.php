<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function typeNews()
    {
        return $this->belongsToMany(TypeNew::class);
    }
}

