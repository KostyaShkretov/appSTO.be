<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'master_id',
        'user_id',
        'date',
        'time',
        'status',
    ];
}
