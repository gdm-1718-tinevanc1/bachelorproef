<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeNew extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function news()
    {
        return $this->belongsToMany(News::class);
    }
}
