<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Basic extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'basic_data';

    public function education()
    {
        return $this->hasMany(Education::class);
    }
}