<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserHobby extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = true;

    public $table = 'user_hobby';

    protected $fillable = [
        'user_id',
        'hobby_id',
    ];
}
