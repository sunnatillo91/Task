<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
use App\Models\Profile;
use PhpParser\Node\NullableType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->company,
            'status' =>$this->faker->numberBetween(1,3),
            'deadline' =>$this->faker->numberBetween(1, 5),
            'company_id' => $this->faker->numberBetween(1,(int)Company::count()),
            'profile_id' => $this->faker->numberBetween(1,(int)Profile::count()),
        ];
    }
}
