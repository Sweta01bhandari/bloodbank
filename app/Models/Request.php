<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    protected $table = 'requests';


    protected $fillable =[
        'sn',
        'patient_id',
     
    ];
    use HasFactory;
}
