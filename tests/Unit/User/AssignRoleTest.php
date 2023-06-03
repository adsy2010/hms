<?php

namespace User;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Tests\Testcase;

class AssignRoleTest extends Testcase
{
    /**
     * @test
     * @return void
     */
    public function testAssignRoleToUser(): void
    {
        $user = User::query()->create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $this->assertIsObject($user);

        $roles = $user->roles;

        $this->assertIsObject($roles);

        $this->assertEquals(0, $roles->count());

        $user->roles()->attach(1);

        $user->refresh();

        $roles = $user->roles;

        $this->assertIsObject($roles);

        $this->assertEquals(1, $roles->count());
    }

    /**
     * @test
     * @return void
     */
    public function testAssignMultipleRoles(): void
    {
        $user = User::query()->create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $this->assertIsObject($user);

        $roles = $user->roles;

        $this->assertIsObject($roles);

        $this->assertEquals(0, $roles->count());

        $user->roles()->sync([2,3,4]);

        $user->refresh();

        $roles = $user->roles;

        $this->assertIsObject($roles);

        $this->assertEquals(3, $roles->count());
    }

    /**
     * @test
     * @return void
     */
    public function testNoRoles(): void
    {
        $user = User::query()->create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        $this->assertIsObject($user);

        $roles = $user->roles;

        $this->assertIsObject($roles);

        $this->assertEquals(0, $roles->count());
    }
}
