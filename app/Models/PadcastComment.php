<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PadcastComment extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = "padcast_comments";
    protected $guarded = [];

    public function getApprovedAttribute($approved)
    {
        return $approved ? 'تایید شده' : 'تایید نشده' ;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function padcast()
    {
        return $this->belongsTo(Padcast::class);
    }

    public function path()
    {
        return "/padcasts/$this->slug";
    }
}
