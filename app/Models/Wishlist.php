<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = "wishlists";
    protected $guarded = [];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
