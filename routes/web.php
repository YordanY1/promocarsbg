<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\CarsPage;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;
use App\Livewire\Pages\ReviewsPage;
use App\Livewire\Pages\FaqPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/cars', CarsPage::class)->name('cars');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/contacts', ContactPage::class)->name('contacts');
Route::get('/reviews', ReviewsPage::class)->name('reviews');
Route::get('/faq', FaqPage::class)->name('faq');
