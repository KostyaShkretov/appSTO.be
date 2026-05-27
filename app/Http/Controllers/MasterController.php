<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class MasterController extends Controller
{
    public function index() {
        return Master::select([
            'id',
            'name',
            'specialization',
            'experience',
            'photo', 
        ])->get();
    }
    public function show(Master $master) {
        // if( auth('sanctum')->user() ) {  
        //     $master->specialization = "HELO";
        // } Если пользователь авторизован 
        return $master;
    }
}    
 
