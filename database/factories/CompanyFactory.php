<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
         'logo' => $this->faker->text(10),
         'description' => $this->faker->text(50),
         'address' => $this->faker->address(),
         'phone_no' => $this->faker->phoneNumber(),
         'email' => $this->faker->email(),
        ];
    }
}
