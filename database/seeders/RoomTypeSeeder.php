<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomType::query()->create(['name' => 'Single', 'description' => 'For one person or one couple', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Double', 'description' => 'For up to four people containing two double beds', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Twin', 'description' => 'For up to two people containing two single beds', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Studio', 'description' => 'One double bed possibly containing kitchenette features', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Deluxe', 'description' => 'At least two double beds, including living space and possibly a minibar', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Room with a view', 'description' => 'Specifically should be an outside facing room with a view', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Suite', 'description' => 'Multiple rooms connected by a living space', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Presidential Suite', 'description' => 'Multiple rooms connected by a living space, could include work desks and hot tubs', 'default_price' => 100, 'image' => '',]);
        RoomType::query()->create(['name' => 'Honeymoon Suite', 'description' => 'Multiple rooms connected by a living space, similar features to presidential suite', 'default_price' => 100, 'image' => '',]);
    }
}
