<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePadcast extends Model
{
    use HasFactory;

    protected $table = "like_padcasts";
    protected $guarded = [];


    public function padcast()
    {
        return $this->belongsTo(Padcast::class);
    }
}
