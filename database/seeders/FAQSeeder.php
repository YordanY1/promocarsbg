<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            [
                'question' => 'Как мога да закупя автомобил?',
                'answer' => 'Можете да изберете автомобил от нашия каталог и да се свържете с нас чрез формата за контакти.',
            ],
            [
                'question' => 'Предлагате ли гаранция за автомобилите?',
                'answer' => 'Да, всеки автомобил в нашия каталог идва с гаранция до 12 месеца.',
            ],
            [
                'question' => 'Какви методи на плащане приемате?',
                'answer' => 'Приемаме плащания в брой, банков превод и кредитни карти.',
            ],
            [
                'question' => 'Мога ли да тествам автомобила преди покупка?',
                'answer' => 'Да, предлагаме възможност за тест драйв след предварителна уговорка.',
            ],
            [
                'question' => 'Каква е политиката за връщане?',
                'answer' => 'Можете да върнете автомобила в срок от 7 дни, ако има технически проблеми.',
            ],
            [
                'question' => 'Мога ли да купя автомобил на изплащане?',
                'answer' => 'Да, предлагаме опции за лизинг и финансиране чрез наши партньори.',
            ],
            [
                'question' => 'Каква е минималната първоначална вноска?',
                'answer' => 'Минималната първоначална вноска е 10% от стойността на автомобила.',
            ],
            [
                'question' => 'Предлагате ли транспорт на автомобила?',
                'answer' => 'Да, можем да организираме транспорт до адрес в рамките на страната.',
            ],
            [
                'question' => 'Какви документи са необходими за покупка?',
                'answer' => 'Необходима е лична карта и, ако е приложимо, документи за финансиране.',
            ],
            [
                'question' => 'Какви автомобили предлагате?',
                'answer' => 'Предлагаме разнообразие от нови и употребявани автомобили, които отговарят на всички стандарти за качество.',
            ],
            [
                'question' => 'Колко време отнема обработката на поръчка?',
                'answer' => 'Обработката отнема между 24 и 48 часа.',
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
