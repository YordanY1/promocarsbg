<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarImageFactory extends Factory
{
    public function definition()
    {
        return [
            'car_id' => Car::factory(),
            'path' => 'images/cars/' . $this->faker->randomElement(['audi_front.jpg', 'audi_side.jpg', 'audi_interior.jpg']),
        ];
    }
}
