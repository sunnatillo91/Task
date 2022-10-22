<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'phone' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->address,
            'gender' => $this->faker->numberBetween(1,2),
            'company_id' => $this->faker->numberBetween(1,(int)Company::count()),
        ];
    }
}
