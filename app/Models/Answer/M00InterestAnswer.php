<?php

namespace App\Models\Answer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FixeAnswers;
use App\Models\Request\M00Request;
class M00InterestAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function m00Request()
    {
        return $this->belongsTo(M00Request::class);
    }
    public function fixeAnswers()
    {
        return $this->belongsTo(FixeAnswers::class);
    }
}
