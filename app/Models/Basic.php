<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Basic extends Authenticatable
{
    use HasApiTokens, HasFactory;

    public $fillable = [

        'name'=>'',
        'surname' =>'',
        'phone'=> '',
        'email' => '',

    ];

    protected $table = 'basic_data';


    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function addresses()
    {
        return $this->hasMany(Addresses::class);
    }
    public function skills()
    {
        return $this->hasMany(Skills::class);
    }
}
