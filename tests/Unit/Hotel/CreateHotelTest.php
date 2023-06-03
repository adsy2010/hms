<?php

namespace Hotel;

use App\Models\Hotel;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateHotelTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function testCreateHotel(): void
    {
        $data = [
            'name' => 'The Sample Hotel',
            'address' => ['line_1' => '1 Main Road', 'line_2' => 'Newtown Alley', 'town' => 'Newtown'],
            'postcode' => 'NA1 1AA',
            'country' => 'United Kingdom',
            'contact_number' => '12345678900',
            'rating' => 3,
        ];

        $this->assertIsArray($data);

        $hotel = Hotel::query()->create($data);

        $this->assertIsObject($hotel);

        $this->assertEquals('The Sample Hotel' , $hotel->name);
        $this->assertEquals(['line_1' => '1 Main Road', 'line_2' => 'Newtown Alley', 'town' => 'Newtown'] , $hotel->address);
        $this->assertEquals('NA1 1AA' , $hotel->postcode);
        $this->assertEquals('United Kingdom' , $hotel->country);
        $this->assertEquals('12345678900' , $hotel->contact_number);
        $this->assertEquals(3 , $hotel->rating);


    }

    /**
     * @test
     * @return void
     */
    public function testMissingRequiredDetails(): void
    {
        $data = [
//            'name' => 'The Sample Hotel',
//            'address' => ['line_1' => '1 Main Road', 'line_2' => 'Newtown Alley', 'town' => 'Newtown'],
//            'postcode' => 'NA1 1AA',
//            'country' => 'United Kingdom',
//            'contact_number' => '12345678900',
//            'rating' => 3,
        ];

        $this->assertIsArray($data);

        $this->expectExceptionCode('HY000');

        $hotel = Hotel::query()->create($data);

        $this->assertIsNotObject($hotel);
    }
}
