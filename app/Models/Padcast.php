<?php

namespace App\Models;



use App\Models\Catepory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Padcast extends Model
{
    use HasFactory;

    protected $table = "padcasts";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }

    public function tags()
    {
        return $this->belongsToMany(tag_padcasts::class, 'padcast_tags');
    }

    public function catepory()
    {
        return $this->belongsTo(Catepory::class);
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
        return $this->hasMany(WishlistPadcast::class)->where('user_id' , $userId)->exists();
    }


    public function checkUserLike($userId)
    {
        return $this->hasMany(LikePadcast::class)->where('user_id' , $userId)->exists();
    }

    public function checkUserStudy($userId)
    {
        return $this->hasMany(StudyPadcast::class)->where('user_id' , $userId)->exists();
    }


    public function approvedComments()
    {
        return $this->hasMany(PadcastComment::class)->where('approved' , 1);
    }
}
