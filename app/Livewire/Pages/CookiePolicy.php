<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class CookiePolicy extends Component {
    public function render() {
        return view( 'livewire.pages.cookie-policy' )->layout( 'components.layouts.app', [
            'metaTitle' => 'Политика за бисквитки | Как използваме cookies - PromoCars BG',
            'metaDescription' => 'Научи как PromoCars BG използва бисквитки (cookies), за да подобри твоето изживяване. Разбери какви видове бисквитки използваме, как те влияят на уебсайта и как можеш да ги управляваш според GDPR.',
            'metaKeywords' => 'политика за бисквитки, cookies, GDPR, защита на лични данни, управление на бисквитки, как работят бисквитките, сесийни бисквитки, трайни бисквитки, аналитични бисквитки, реклами, поверителност, онлайн сигурност, PromoCars BG',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ] );
    }
}
