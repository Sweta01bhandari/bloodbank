<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    protected $table ='donations';
      
    protected $fillable =[
        'id',
        'donar_name',
        'blood_group',
        'no_units',
        'disease',
        'status',

    ];

    use HasFactory;
}
