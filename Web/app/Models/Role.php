<?php

namespace EDS_site\Models;
use EDS_site\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
