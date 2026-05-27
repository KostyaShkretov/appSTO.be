<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) { 
            $table->foreignId('master_id')->constrained()->cascadeOnDelete();
            $table->tinyInteger('day_of_week');  
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
