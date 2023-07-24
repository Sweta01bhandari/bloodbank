<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class donor extends Authenticatable
{

    protected $table ='donors';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'mobile',
        'blood_type',
    ];
    use HasFactory;
}
