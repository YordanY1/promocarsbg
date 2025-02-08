<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'content' => $this->faker->sentence(20), 
            'car_id' => Car::factory(),
        ];
    }
}
