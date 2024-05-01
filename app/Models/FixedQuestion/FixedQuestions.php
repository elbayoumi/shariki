<?php

namespace App\Models\FixedQuestion;

use App\Models\FixeAnswer\FixeAnswers;
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
    public function f00SelfFixedQuestions()
    {
        return $this->hasMany(F00SelfFixedQuestions::class);
    }
    public function m00SelfFixedQuestions()
    {
        return $this->hasMany(M00SelfFixedQuestions::class);
    }
    public function m00InterestedFixedQuestions()
    {
        return $this->hasMany(M00InterestedFixedQuestions::class);
    }
    public function f00InterestedFixedQuestions()
    {
        return $this->hasMany(F00InterestedFixedQuestions::class);
    }
    public function fixedQuestionsForAll()
    {
        return $this->hasMany(FixedQuestionsForAll::class);
    }
}
