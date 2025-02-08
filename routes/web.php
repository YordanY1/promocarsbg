<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\CatalogPage;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/catalog', CatalogPage::class)->name('catalog');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/contacts', ContactPage::class)->name('contacts');