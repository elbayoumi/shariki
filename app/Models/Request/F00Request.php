<?php

namespace App\Models\Request;

use App\Models\Answer\F00Answer;
use App\Models\CompatibilityRate;
use App\Models\Payment\F00Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F00Request extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function f00Answer()
    {
        return $this->hasMany(F00Answer::class);
    }
    public function f00Payment()
    {
        return $this->hasMany(F00Payment::class);
    }
    public function compatibilityRate()
    {
        return $this->hasMany(CompatibilityRate::class);
    }

}
