<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;  

class AppointmentController extends Controller
{
    public function store(Request $request) {

        $exists = Appointment::where('master_id', $request->master_id)
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->exists();
            if($exists) {
                return response()->json(['message' => 'Запись уже занята'], 422);
            }

            $appointment = Appointment::create([
                'user_id' => $request->user_id,
                'master_id' => $request->master_id,
                'date' => $request->date,
                'time' => $request->time,
                'status' => 'pending',
            ]);
            return response()->json(['message' => 'Запись успешно создана','data' => $appointment]);
    }
}
