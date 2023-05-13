<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use App\Models\ArticleImage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory , Sluggable;

    protected $table = "articles";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'انتشار' : 'پیش نمایش' ;
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
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

}
