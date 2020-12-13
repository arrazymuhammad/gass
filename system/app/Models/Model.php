<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;

class Model extends BaseModel
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
}
