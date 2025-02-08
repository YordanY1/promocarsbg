<?php

namespace Database\Seeders;

use App\Models\CarImage;
use Illuminate\Database\Seeder;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarImage::factory()->count(100)->create();
    }
}
