<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $address = $this->faker->address;
        $lines = explode("\n", $address);
        $area = explode(',', $lines[1]);
        $countyPostcode = explode(' ', trim($area[1]),2);
        $state = $countyPostcode[0];
        $postcode = $countyPostcode[1];

        $jsonAddress = [];
        $jsonAddress['address_1'] = $lines[0];
        $jsonAddress['town'] = $area[0];
        $jsonAddress['state'] = $state;

        return [
            'name' => $this->faker->company,
            'address' => $jsonAddress,
            'postcode' => $postcode,
            'country' => 'USA',
            'contact_number' => $this->faker->phoneNumber,
            'rating' => $this->faker->numberBetween(1,5),
        ];
    }
}
