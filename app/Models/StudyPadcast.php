<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyPadcast extends Model
{
    use HasFactory;

    protected $table = "study_padcasts";
    protected $guarded = [];


    public function padcast()
    {
        return $this->belongsTo(Padcast::class);
    }
}
