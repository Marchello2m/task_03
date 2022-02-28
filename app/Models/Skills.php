<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Skills extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'skills';

    public function basic()
    {
        return $this->belongsTo(Basic::class);
    }
}
