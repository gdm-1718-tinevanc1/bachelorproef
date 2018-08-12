<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $table = 'contact';

    use SoftDeletes;
    protected $dates = ['deleted_at'];


}
