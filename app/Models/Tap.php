<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tap extends Model
{
    use HasFactory;

    protected $table = "taps";
    protected $guarded = [];


    public function padcasts()
    {
        return $this->hasMany(Padcast::class);
    }
}
