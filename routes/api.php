<?php

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AuthController;



Route::get("/masters", [MasterController::class, "index"]);
Route::get("/masters/{master}", [MasterController::class, "show"]);

Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);
