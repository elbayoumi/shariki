<?php

namespace App\Models;

use App\Models\Traits\MaleInterestAttributesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaleInterest extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    use MaleInterestAttributesTrait;



}
