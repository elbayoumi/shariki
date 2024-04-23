<?php

namespace App\Models;

use App\Models\Request\F00Request;
use App\Models\Request\M00Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompatibilityRate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function m00Request()
    {
        return $this->belongsTo(M00Request::class);
    }
    public function f00Request()
    {
        return $this->belongsTo(F00Request::class);
    }
}
