<?php

namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
}
