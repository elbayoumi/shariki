<?php

namespace App\Models\Answer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FixeAnswer\FixeAnswers;
use App\Models\Request\F00Request;
class F00InterestAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function f00Request()
    {
        return $this->belongsTo(F00Request::class);
    }
    public function fixeAnswers()
    {
        return $this->belongsTo(FixeAnswers::class);
    }
}
