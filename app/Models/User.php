<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const GENDER_BOY = 1;
    const GENDER_GIRL = 2;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'name',
        'phone',
        'date_of_birth',
        'address',
        'gender',
        'hobbies',
        'email_verified_at',
        'phone_company',
        'introduction',
        'avatar',
    ];
}
