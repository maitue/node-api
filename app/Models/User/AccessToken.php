<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    use HasFactory;

    protected $table = 'access_tokens';

    protected $filable = [
        'user_id',
        'access_token'
    ];
}
