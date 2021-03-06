<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'dob' => $this->faker->date('Y-m-d', '2000-01-01'),
            'start_date' => $this->faker->date('Y-m-d', 'now'),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => 44423333,
            'address' => $this->faker->streetAddress,
            'suburb' => $this->faker->state,
            'city' => $this->faker->city,
            'rate' => $this->faker->numberBetween(20, 50),
        ];
    }
}
