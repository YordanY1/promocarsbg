<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('start|здравей|hello', function (BotMan $botman) {
            $this->showMainMenu($botman, "👋 Здравей! Как мога да помогна?");
        });

        $botman->hears('автомобили', function (BotMan $botman) {
            $message = "🚗 Ние предлагаме нови и употребявани автомобили от марки като BMW, Mercedes-Benz, Audi, Toyota, Volkswagen, Ford и други.";
            $this->showMainMenu($botman, $message);
        });

        $botman->hears('контакти', function (BotMan $botman) {
            $message = "📞 Телефон: 088 583 5973\n📧 Имейл: contact@promocars.bg\n🏢 Адрес: София, България";
            $this->showMainMenu($botman, $message);
        });

        $botman->hears('услуги', function (BotMan $botman) {
            $message = "✅ Продажба на нови и употребявани автомобили\n✅ Лизинг и финансиране\n✅ Съдействие при регистрация и сервиз";
            $this->showMainMenu($botman, $message);
        });

        $botman->listen();
    }

    private function showMainMenu(BotMan $botman, string $message)
    {
        $question = Question::create($message . "\n\nКакво още ви интересува?")
            ->addButtons([
                Button::create('🚗 Какви автомобили предлагате?')->value('автомобили'),
                Button::create('📞 Как да се свържа с вас?')->value('контакти'),
                Button::create('🛠 Какви услуги предлагате?')->value('услуги'),
            ]);

        $botman->reply($question);
    }
}
