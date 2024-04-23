<?php

namespace App\Models;

use App\Models\Answer\{
    F00Answer,
    M00Answer,
};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixeAnswers extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function m00Answer()
    {
        return $this->hasMany(M00Answer::class);
    }
    public function f00Answer()
    {
        return $this->hasMany(F00Answer::class);
    }
    public function fixedQuestions()
    {
        return $this->belongsTo(FixedQuestions::class);
    }
}
