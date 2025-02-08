<?php

namespace Database\Factories;

use App\Models\CarMake;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition()
    {
        return [
            'make_id' => CarMake::inRandomOrder()->first()->id,
            'model' => $this->faker->randomElement(['A6', 'X5', 'C-Class']),
            'category' => $this->faker->randomElement(['Седан', 'SUV', 'Хечбек']),
            'year' => $this->faker->year(),
            'mileage' => $this->faker->numberBetween(50000, 300000),
            'transmission' => $this->faker->randomElement(['Автоматична', 'Ръчна']),
            'engine' => $this->faker->randomElement(['Дизел', 'Бензин', 'Хибрид']),
            'vin' => $this->faker->bothify('WAUZZZ4G2DN#######'),
            'exterior_color' => $this->faker->safeColorName(),
            'interior_color' => $this->faker->randomElement(['Черен кожа', 'Бежов']),
            'drive' => $this->faker->randomElement(['Предно', 'Задно', '4x4']),
            'price' => $this->faker->numberBetween(15000, 80000),
            'keys' => $this->faker->randomElement(['1 ключ', '2 ключа']),
            'ownership' => $this->faker->boolean(),
        ];
    }
}
