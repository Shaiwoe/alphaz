<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;

    protected $table = "tabs";
    protected $guarded = [];


    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
