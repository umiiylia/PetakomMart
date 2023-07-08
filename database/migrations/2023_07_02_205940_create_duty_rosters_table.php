<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('duty_rosters', function (Blueprint $table) {
            
        $table->bigIncrements('Duty_ID');
        $table->foreignId('user_id')->constrained('users');
        $table->string('Duty_title');
        $table->text('Duty_Description');
        $table->date('Duty_Date');
        $table->date('Duty_EndDate');
        $table->string('Duty_Status');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duty_rosters');
    }
};
