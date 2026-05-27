<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    
    public function run(): void
    {
        $workDays = [1,2,3,4,5];
        foreach($workDays as $masterId) {
            for($day = 1; $day <= 7; $day++) {
                Schedule::create([
                    'master_id' => $masterId,
                    'day_of_week' => $day,
                    'start_time' => '09:00:00',
                    'end_time' => '18:00:00'
                ]);
            }
        }
    }
}
