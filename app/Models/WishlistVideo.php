<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistVideo extends Model
{
    use HasFactory;

    protected $table = "wishlist_videos";
    protected $guarded = [];


    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
