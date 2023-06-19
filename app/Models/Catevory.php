<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catevory extends Model
{
    use HasFactory;

    protected $table = "catevorys";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }

    public function parent()
    {
        return $this->belongsTo(Catevory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Catevory::class, 'parent_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
