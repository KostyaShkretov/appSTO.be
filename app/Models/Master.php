<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Master extends Model
{   
    use HasFactory; 
    protected $fillable = [
        "name",
        "specialization",
        "experience",
        "photo",
        'about',
    ]; 
}
