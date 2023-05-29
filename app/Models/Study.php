<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Study extends Model
{
    use HasFactory;

    protected $table = "studies";
    protected $guarded = [];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
