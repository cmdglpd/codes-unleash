<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_number',
        'title',
        'programming_language_id'
    ];

    protected $hidden = [
        'id',
        'programming_language_id'
    ];
}
