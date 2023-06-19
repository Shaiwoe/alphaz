<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeBook extends Model
{
    use HasFactory;

    protected $table = "like_books";
    protected $guarded = [];


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
