<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $fillable = [
        'master_id',
        'day_of_week',
        'start_time',
        'end_time',
        'status',
    ];

    public function master() {
        return $this->belongsTo(Master::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
