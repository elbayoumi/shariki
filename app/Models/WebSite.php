<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSite extends Model
{
    use HasFactory;
    protected $guarded = [];
// Define the columns that should be casted to array
protected $casts = [
    'M00' => 'array',
    'F00' => 'array',
];

}
