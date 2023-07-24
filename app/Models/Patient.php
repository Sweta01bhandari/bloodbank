<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $table = 'patients';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'mobile_nu',
        ];
    use HasFactory;
}
