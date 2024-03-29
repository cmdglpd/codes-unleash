<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'questions']; 
        // Add other fillable fields as needed

        protected $hidden = [
            'id',
            'exam_id'
        ];
}
