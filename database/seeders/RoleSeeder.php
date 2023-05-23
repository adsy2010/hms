<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->create(['name' => 'Administrator', 'description' => 'Overall System Administrator']);
        Role::query()->create(['name' => 'Receptionist', 'description' => 'Reception staff']);
        Role::query()->create(['name' => 'Concierge', 'description' => 'Baggage and vehicle management']);
        Role::query()->create(['name' => 'Hotel Manager', 'description' => 'General manager of the hotel']);
        Role::query()->create(['name' => 'Director of Purchasing', 'description' => 'Responsible for making purchases']);
        Role::query()->create(['name' => 'Cleaning Manager', 'description' => 'Responsible for the upkeep of rooms']);
        Role::query()->create(['name' => 'Event Planner', 'description' => 'Activity planner']);
        Role::query()->create(['name' => 'Reservations Manager', 'description' => 'Responsible for the management of room bookings and reservations']);
        Role::query()->create(['name' => 'Sales Manager', 'description' => 'Responsible for sales']);
    }
}
