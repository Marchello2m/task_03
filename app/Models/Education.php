<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Education extends Authenticatable
{
    use HasApiTokens, HasFactory;

    public $fillable = [

        'ename'=>'',
        'from' => '',
        'to' => '',
        'city' => '',
        'faculty' =>'',
        'studyfild'=> '',
        'level' => '',
        'status' => '',


    ];
    protected $table = 'education';

    public function basic()
    {
        return $this->belongsTo(Basic::class);
    }
}
