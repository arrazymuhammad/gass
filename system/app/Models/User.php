<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{

    public $primaryKey = 'uuid';
    public $incrementing = false;
    public $keyType = 'string';
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->uuid = (string) Str::uuid();
        });
    }

    function setPasswordAttribute($value){
        return $this->attributes['password'] = bcrypt($value);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
