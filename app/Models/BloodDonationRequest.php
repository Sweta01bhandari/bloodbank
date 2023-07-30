<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonationRequest extends Model
{
    protected $table = 'donations';

    protected $fillable = [
        'donor_name',
        'blood_group',
        'no_units',
        'disease',
         'status',
       
    ];
    use HasFactory;
}
