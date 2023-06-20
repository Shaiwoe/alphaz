<?php

namespace App\Models;

use App\Models\Catebory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }



    public function tags()
    {
        return $this->belongsToMany(tag_books::class, 'book_tags');
    }

    public function catebory()
    {
        return $this->belongsTo(Catebory::class);
    }


    public function scopeSearch($query)
    {
        $keyword = request()->query('search');
        if (request()->query('search') && trim($keyword) != '') {
            $query->where('title', 'LIKE', '%'. trim($keyword) .'%');
        }

        return $query;
    }


    public function checkUserWishlist($userId)
    {
        return $this->hasMany(WishlistBook::class)->where('user_id' , $userId)->exists();
    }


    public function checkUserLike($userId)
    {
        return $this->hasMany(LikeBook::class)->where('user_id' , $userId)->exists();
    }

    public function checkUserStudy($userId)
    {
        return $this->hasMany(StudyBook::class)->where('user_id' , $userId)->exists();
    }


    public function approvedComments()
    {
        return $this->hasMany(BookComment::class)->where('approved' , 1);
    }
}
