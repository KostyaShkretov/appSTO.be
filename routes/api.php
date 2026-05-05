<?php

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;



Route::get("/masters",[MasterController::class,"index"]); 
Route::get("/masters/{master}",[MasterController::class,"show"]); 
