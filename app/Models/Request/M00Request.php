<?php

namespace App\Models\Request;

use App\Models\Answer\M00Answer;
use App\Models\CompatibilityRate;
use App\Models\Payment\M00Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M00Request extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function m00Answer()
    {
        return $this->hasMany(M00Answer::class);
    }
    public function m00Payment()
    {
        return $this->hasMany(M00Payment::class);
    }
    public function compatibilityRate()
    {
        return $this->hasMany(CompatibilityRate::class);
    }
}
