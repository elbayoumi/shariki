<?php

namespace App\Models\FixeAnswer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixeAnswersForAll extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function fixeAnswers()
    {
        return $this->belongsTo(FixeAnswers::class);
    }
}
