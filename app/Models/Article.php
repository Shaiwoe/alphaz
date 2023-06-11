<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Like;
use App\Models\Study;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\ArticleImage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory ;

    protected $table = "articles";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function path()
    {
        return "/articles/$this->slug";
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
        return $this->hasMany(Wishlist::class)->where('user_id' , $userId)->exists();
    }


    public function checkUserLike($userId)
    {
        return $this->hasMany(Like::class)->where('user_id' , $userId)->exists();
    }

    public function checkUserStudy($userId)
    {
        return $this->hasMany(Study::class)->where('user_id' , $userId)->exists();
    }


    public function approvedComments()
    {
        return $this->hasMany(Comment::class)->where('approved' , 1);
    }

}
