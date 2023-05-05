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
        Schema::create('room_type_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\RoomType::class);
            $table->decimal('price');
            $table->date('price_from');
            $table->date('price_until');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_type_prices');
    }
};
