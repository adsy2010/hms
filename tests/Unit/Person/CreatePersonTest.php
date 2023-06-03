<?php

namespace Person;

use App\Models\Person;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreatePersonTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function testCreateSimplePerson(): void
    {
        $data = [
            'hotel_id' => 1,
            'first_name' => 'Bob',
            'last_name' => 'Smith',
            'email' => 'bob.smith@example.com'
        ];

        $this->assertIsArray($data);

        $person = Person::query()->create($data);

        $this->assertIsObject($person);

        $this->assertEquals('Bob', $person->first_name);
        $this->assertEquals('Smith', $person->last_name);
        $this->assertEquals('bob.smith@example.com', $person->email);

        $this->assertNull($person->date_of_birth);
        $this->assertNull($person->user_id);
        $this->assertNull($person->gender);
        $this->assertNull($person->contact_number);
        $this->assertNull($person->address);
        $this->assertNull($person->postcode);
        $this->assertNull($person->country);
    }

    /**
     * @test
     * @return void
     */
    public function testCreateComplexPerson(): void
    {
        $data = [
            'user_id' => 1,
            'hotel_id' => 1,
            'first_name' => 'Bob',
            'last_name' => 'Smith',
            'email' => 'bob.smith@example.com',
            'date_of_birth' => "2002-06-12",
            'gender' => 'Male',
            'contact_number' => '12345678910',
            'address' => ['line_1' => '1 Smith Avenue', 'line_2' => 'Garytown', 'town' => 'Sherbert'],
            'postcode' => 'SH1 2BC',
            'country' => 'United Kingdom'
        ];

        $this->assertIsArray($data);

        $person = Person::query()->create($data);

        $this->assertIsObject($person);

        $this->assertEquals('Bob', $person->first_name);
        $this->assertEquals('Smith', $person->last_name);
        $this->assertEquals('bob.smith@example.com', $person->email);

        $this->assertEquals(1, $person->user_id);
        $this->assertEquals(\Carbon\Carbon::parse("2002-06-12"), $person->date_of_birth);
        $this->assertEquals('Male', $person->gender);
        $this->assertEquals('12345678910', $person->contact_number);
        $this->assertEquals(['line_1' => '1 Smith Avenue', 'line_2' => 'Garytown', 'town' => 'Sherbert'], $person->address);
        $this->assertEquals('SH1 2BC', $person->postcode);
        $this->assertEquals('United Kingdom', $person->country);
    }

    /**
     * @test
     * @return void
     */
    public function testMissingRequiredDetails(): void
    {
        $data = [
            'user_id' => 1,
//            'hotel_id' => 1,
//            'first_name' => 'Bob',
//            'last_name' => 'Smith',
//            'email' => 'bob.smith@example.com',
            'date_of_birth' => "2002-06-12",
            'gender' => 'Male',
            'contact_number' => '12345678910',
            'address' => ['line_1' => '1 Smith Avenue', 'line_2' => 'Garytown', 'town' => 'Sherbert'],
            'postcode' => 'SH1 2BC',
            'country' => 'United Kingdom'
        ];

        $this->assertIsArray($data);

        $this->expectExceptionCode('HY000');

        $person = Person::query()->create($data);

        $this->assertIsNotObject($person);
    }
}
