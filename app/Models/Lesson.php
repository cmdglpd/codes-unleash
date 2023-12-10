<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    use HasFactory;

    protected $fillable = [
        'reference_number',
        'lesson_number',
        'title',
        'video',
        'example_code',
        'output',
        'explanation',
        'chapter_id'
    ];

    protected $hidden = [
        'id',
        'chapter_id'
    ];
}
