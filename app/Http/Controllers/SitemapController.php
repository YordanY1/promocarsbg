<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Car;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        $urls = [
            ['loc' => route('home'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('about'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('cars'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('contacts'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('faq'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('policy-privacy'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => route('cookie-policy'), 'lastmod' => Carbon::now()->toAtomString()],
        ];

        foreach ($cars as $car) {
            $urls[] = [
                'loc' => route('car.details', ['slug' => $car->slug]),
                'lastmod' => $car->updated_at->toAtomString(),
            ];
        }

        return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
    }
}
