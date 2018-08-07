<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Manualtherapy extends Model
{
    // use Filterable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}