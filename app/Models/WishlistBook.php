<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistBook extends Model
{
    use HasFactory;

    protected $table = "wishlist_books";
    protected $guarded = [];


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
