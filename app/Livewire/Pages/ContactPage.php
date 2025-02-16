<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component {
    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'phone' => 'required|string|min:6',
        'message' => 'required|string|min:5',
    ];

    public function sendEmail() {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ];

        Mail::to( config( 'mail.from.address' ) )->send( new ContactMail( $data ) );

        $this->dispatch( 'success', message: 'Вашето съобщение беше изпратено успешно!' );

        $this->reset();
    }

    public function render() {
        return view( 'livewire.pages.contact-page' )->layout( 'components.layouts.app', [
            'metaTitle' => 'Контакти | Свържете се с нас - PromoCars BG',
            'metaDescription' => 'Свържете се с PromoCars BG! Нашите авто експерти са тук, за да ви помогнат с избора на автомобил, лизинг, финансиране и всички въпроси свързани с покупка или продажба на коли. Посетете нашия офис или се свържете с нас по телефон или имейл.',
            'metaKeywords' => 'контакти, връзка с нас, автокъща, телефон за връзка, имейл, адрес, локация, сервиз, покупка на кола, продажба на автомобили, авто консултация, лизинг на коли, финансиране на автомобил, PromoCars BG контакти',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ] );
    }
}
