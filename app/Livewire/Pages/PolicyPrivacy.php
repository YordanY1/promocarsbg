<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class PolicyPrivacy extends Component
{
    public function render()
    {
        return view('livewire.pages.policy-privacy')->layout('components.layouts.app', [
            'metaTitle' => 'Политика за поверителност | Защита на личните данни - PromoCars BG',
            'metaDescription' => 'Научи повече за политиката за поверителност на PromoCars BG. Разберете как събираме, съхраняваме и защитаваме личните ви данни съгласно GDPR и законодателството на ЕС.',
            'metaKeywords' => 'политика за поверителност, GDPR, защита на лични данни, поверителност, cookies, обработка на лични данни, сигурност на данните, правата на потребителя, бисквитки, PromoCars BG поверителност',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
