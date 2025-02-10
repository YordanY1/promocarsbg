<?php

namespace Database\Factories;

use App\Models\CarMake;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory {
    public function definition() {
        $make = CarMake::inRandomOrder()->first() ?? CarMake::factory()->create();
        $model = $this->faker->randomElement( [ 'A6', 'X5', 'C-Class' ] );
        $baseSlug = Str::slug( "{$make->name}-{$model}" );
        $count = Car::where( 'slug', 'LIKE', "$baseSlug%" )->count();
        $slug = $count > 0 ? "{$baseSlug}-" . ( $count + 1 ) : $baseSlug;

        return [
            'make_id' => $make->id,
            'model' => $model,
            'slug' => $slug,
            'category' => $this->faker->randomElement( [ 'Седан', 'SUV', 'Хечбек' ] ),
            'year' => $this->faker->year(),
            'mileage' => $this->faker->numberBetween( 50000, 300000 ),
            'transmission' => $this->faker->randomElement( [ 'Автоматична', 'Ръчна' ] ),
            'engine' => $this->faker->randomElement( [ 'Дизел', 'Бензин', 'Хибрид' ] ),
            'vin' => $this->faker->bothify( 'WAUZZZ4G2DN#######' ),
            'exterior_color' => $this->faker->safeColorName(),
            'interior_color' => $this->faker->randomElement( [ 'Черен кожа', 'Бежов' ] ),
            'drive' => $this->faker->randomElement( [ 'Предно', 'Задно', '4x4' ] ),
            'price' => $this->faker->numberBetween( 15000, 80000 ),
            'keys' => $this->faker->randomElement( [ '1 ключ', '2 ключа' ] ),
            'ownership' => 'PromoCarsBG',
            'description' => $this->generateCarDescription( $make->name, $model ),
        ];
    }

    private function generateCarDescription( $make, $model ) {
        return '🚗 Представяме ви ' . strtoupper( $make ) . ' ' . strtoupper( $model ) . " - идеалният избор за динамично и комфортно шофиране!
        
🛣️ **Година на производство**: " . $this->faker->year() . "
🛠️ **Трансмисия**: " . $this->faker->randomElement( [ 'Автоматична', 'Ръчна' ] ) . "
⛽ **Двигател**: " . $this->faker->randomElement( [ 'Дизел', 'Бензин', 'Хибрид' ] ) . "
💨 **Пробег**: " . $this->faker->numberBetween( 50000, 300000 ) . " км
🎨 **Цвят**: " . $this->faker->safeColorName() . "
🎭 **Салон**: " . $this->faker->randomElement( [ 'Черен кожа', 'Бежов' ] ) . "

🚀 **Специални характеристики**:
✔️ Страхотна икономия на гориво 🌱
✔️ Високо ниво на комфорт 🏆
✔️ Перфектно съотношение цена/качество 💰

🔥 Не изпускайте този шанс – запазете своя тест-драйв още днес! 📞";
    }
}
