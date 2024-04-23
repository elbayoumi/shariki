<?php

namespace App\Models\Answer;

use App\Models\FixeAnswers;
use App\Models\Request\M00Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M00Answer extends Model
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
