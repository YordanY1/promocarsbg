<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\CarsPage;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/cars', CarsPage::class)->name('cars');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/contacts', ContactPage::class)->name('contacts');