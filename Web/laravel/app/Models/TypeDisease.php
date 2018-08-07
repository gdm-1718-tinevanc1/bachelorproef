<?php
namespace EDS_site\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeDisease extends Model
{
    public $table = "types_diseases";

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function scopeByInfoId($query, $val){
        return $query->where('disease_id', $val);
    }


    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
