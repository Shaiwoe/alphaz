<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyBook extends Model
{
    use HasFactory;

    protected $table = "study_books";
    protected $guarded = [];


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
