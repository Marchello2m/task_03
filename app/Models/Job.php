<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Job extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'job';

    public function basic()
    {
        return $this->belongsTo(Basic::class);
    }
}
