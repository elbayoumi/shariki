<?php

namespace App\Models\FixeAnswer;

use App\Models\Answer\{
    F00Answer,
    M00Answer,
};
use App\Models\FixedQuestion\FixedQuestions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixeAnswers extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;


    public function m00Answer()
    {
        return $this->hasMany(M00Answer::class);
    }
    public function f00Answer()
    {
        return $this->hasMany(F00Answer::class);
    }
    public function f00InterestedFixeAnswers()
    {
        return $this->hasMany(F00InterestedFixeAnswers::class);
    }
    public function m00InterestedFixeAnswers()
    {
        return $this->hasMany(m00InterestedFixeAnswers::class);
    }
    public function f00SelfFixeAnswers()
    {
        return $this->hasMany(F00SelfFixeAnswers::class);
    }
    public function m00SelfFixeAnswers()
    {
        return $this->hasMany(m00SelfFixeAnswers::class);
    }
    public function fixedQuestions()
    {
        return $this->belongsTo(FixedQuestions::class);
    }
}
