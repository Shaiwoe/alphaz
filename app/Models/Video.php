<?php

namespace App\Models;


use App\Models\Catevory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $table = "videos";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }


    public function tags()
    {
        return $this->belongsToMany(tag_videos::class, 'video_tags');
    }

    public function catevory()
    {
        return $this->belongsTo(Catevory::class);
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
        return $this->hasMany(WishlistVideo::class)->where('user_id' , $userId)->exists();
    }


    public function checkUserLike($userId)
    {
        return $this->hasMany(LikeVideo::class)->where('user_id' , $userId)->exists();
    }

    public function checkUserStudy($userId)
    {
        return $this->hasMany(StudyVideo::class)->where('user_id' , $userId)->exists();
    }


    public function approvedComments()
    {
        return $this->hasMany(VideoComment::class)->where('approved' , 1);
    }
}
