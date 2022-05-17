<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TokenRequest extends Model
{
    protected $fillable = [
        'user_id',
        'user_token_id',
        'ip',
        'user_agent',
    ];

    use HasFactory, SoftDeletes;
}