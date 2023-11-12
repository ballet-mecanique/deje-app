<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->company();
        $nameDomain = Str::slug($name) . '.' . $this->faker->tld();
        return [
            'name' => $name,
            'street_1' => $this->faker->streetName(),
            'post_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country_id' => $this->faker->numberBetween(0, 193),
            'phone' => $this->faker->phoneNumber(),
            'email' => 'info@' . $nameDomain,
            'website' => $nameDomain
        ];
    }
}