<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'price' => $this->faker->numberBetween(0, 500),
            'quantity' => $this->faker->numberBetween(1, 100),
            'expiry_date' => $this->faker->date(),
            'description' => $this->faker->text(50),
            'image' => $this->faker->text(20),
            'company' => $this->faker->name(),
        ];
    }
}
