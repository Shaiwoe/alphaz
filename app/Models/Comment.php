<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = "article_comments";
    protected $guarded = [];

    public function getApprovedAttribute($approved)
    {
        return $approved ? 'تایید شده' : 'تایید نشده' ;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function path()
    {
        return "/articles/$this->slug";
    }
}
