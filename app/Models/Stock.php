<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table ='stocks';

    protected $fillable = [
        'id',
        'sn',
        'blood_group',
        'stock',
    ];
    use HasFactory;
}
