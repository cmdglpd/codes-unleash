<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProgrammingLanguage;

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

    protected function programmingLanguage(){
        return $this->belongsTo(ProgrammingLanguage::class, 'programming_language_id');
    }
}
