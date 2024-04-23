<?php

namespace App\Models\Payment;

use App\Models\Request\M00Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M00Payment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function m00Request()
    {
        return $this->belongsTo(M00Request::class);
    }
}
