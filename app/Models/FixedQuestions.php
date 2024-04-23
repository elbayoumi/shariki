<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedQuestions extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function fixeAnswers()
    {
        return $this->hasMany(FixeAnswers::class);
    }
}
