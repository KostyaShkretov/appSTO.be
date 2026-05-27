<?php

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Models\User; 



Route::get("/masters", [MasterController::class, "index"]);
Route::get("/masters/{master}", [MasterController::class, "show"])->middleware('auth:sanctum'); //авторизован ли пользователь

Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

Route::post("/appointments", [AppointmentController::class, "store"]);
 
