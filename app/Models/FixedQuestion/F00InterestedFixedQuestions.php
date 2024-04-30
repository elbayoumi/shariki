<?php
namespace App\Models\FixedQuestion;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F00InterestedFixedQuestions extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function fixedQuestions()
    {
        return $this->belongsTo(FixedQuestions::class);
    }

}
