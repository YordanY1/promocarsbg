<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    protected $model = \App\Models\Promotion::class;

    public function definition()
    {
        $promotions = [
            [
                'title' => 'Гореща оферта на седмицата!',
                'description' => 'Вземете 10% отстъпка на всички седани BMW при покупка този месец.',
                'discount' => 10,
            ],
            [
                'title' => 'SUV Промоция',
                'description' => 'Намаление с 15% на всички SUV модели Audi и Volvo до края на месеца!',
                'discount' => 15,
            ],
            [
                'title' => 'Летен бонус за нови клиенти',
                'description' => 'Купете автомобил от нашия каталог и получете **безплатна първа смяна на масло**!',
                'discount' => 0,
            ],
            [
                'title' => 'Супер сделка за електромобили',
                'description' => 'До 5000 лв. отстъпка на **Tesla Model 3 и Hyundai Ioniq 5**!',
                'discount' => 12,
            ],
            [
                'title' => 'Оферта за финансиране с 0% лихва!',
                'description' => 'Финансирайте своя нов автомобил с **0% лихва за първите 6 месеца**.',
                'discount' => 0,
            ],
            [
                'title' => 'Специална отстъпка за семейни автомобили',
                'description' => '20% отстъпка за всички **Ford S-Max и Volkswagen Touran** модели.',
                'discount' => 20,
            ],
            [
                'title' => 'Зимна оферта - AWD модели',
                'description' => 'Намаление с 18% на всички **4x4 автомобили** – Subaru, Audi Quattro, BMW xDrive!',
                'discount' => 18,
            ],
        ];

        $selectedPromotion = $this->faker->randomElement($promotions);

        return [
            'title' => $selectedPromotion['title'],
            'description' => $selectedPromotion['description'],
            'discount' => $selectedPromotion['discount'],
            'expires_at' => now()->addDays(rand(5, 30)),
        ];
    }
}
