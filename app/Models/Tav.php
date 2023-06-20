<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tav extends Model
{
    use HasFactory;

    protected $table = "tavs";
    protected $guarded = [];


    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
