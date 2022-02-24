<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Addresses extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'addresses';

    public function basic()
    {
        return $this->belongsTo(Basic::class);
    }
}
