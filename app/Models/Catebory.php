<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catebory extends Model
{
    use HasFactory;

    protected $table = "cateborys";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }

    public function parent()
    {
        return $this->belongsTo(Catebory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Catebory::class, 'parent_id');
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
