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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Person::class);
            $table->foreignIdFor(\App\Models\RoomType::class);
            $table->date('arrival_date');
            $table->time('estimated_arrival_time');
            $table->date('departure_date');
            $table->time('estimated_departure_time');
            $table->integer('adults');
            $table->integer('children');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
