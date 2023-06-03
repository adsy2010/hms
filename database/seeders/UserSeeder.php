<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = "HMS-2023";

        $user = User::query()->create([
            'name' => 'System',
            'email' => 'system@example.com',
            'password' => Hash::make($password),
        ]);

        $user->roles()->sync([Role::ADMINISTRATOR]);
    }
}
