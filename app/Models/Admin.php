<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table= 'admins';


    protected $fillable =[
        'name',
        'email',
        'password'
    ];



    use HasFactory;
}
