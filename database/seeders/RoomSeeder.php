<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\Hotel::query()->get() as $hotel) {
            for($i = 1; $i <= 3; $i++) {

                $maxRooms = 0;
                switch($i) {
                    case 1: $maxRooms = 100; break;
                    case 2:
                    case 3: $maxRooms = 30; break;
                }

                for ($x = 1; $x < $maxRooms; $x++) {
                    $identifier = $i;

                    if($x < 10) {
                        $identifier .= 0;
                    }

                    $identifier .= $x;

                    Room::factory()->create(['hotel_id' => $hotel->id, 'room_type_id' => $i, 'identifier' => $identifier]);
                }
            }
        }
    }
}
