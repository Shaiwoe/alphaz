<?php

namespace App\Models;

use App\Models\Padcast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catepory extends Model
{
    use HasFactory;

    protected $table = "cateporys";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }

    public function parent()
    {
        return $this->belongsTo(Catepory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Catepory::class, 'parent_id');
    }

    public function padcasts()
    {
        return $this->hasMany(Padcast::class);
    }
}
