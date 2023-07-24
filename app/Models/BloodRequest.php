<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $table = 'requests';


    protected $fillable =[
        'sn',
        'patient_id',
        'no_units',
        'blood_group',
        'reason',
        'status',
    ];
    use HasFactory;
}
