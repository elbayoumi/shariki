<?php

namespace App\Models\Payment;

use App\Models\Request\F00Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F00Payment extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function f00Request()
    {
        return $this->belongsTo(F00Request::class);
    }
}
