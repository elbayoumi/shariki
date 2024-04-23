<?php

namespace App\Models\Answer;

use App\Models\FixeAnswers;
use App\Models\Request\F00Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F00Answer extends Model
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
