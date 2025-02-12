<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            CarMakeSeeder::class,
            // CarSeeder::class,     
            // ReviewSeeder::class,
            // PromotionSeeder::class,
            // CarImageSeeder::class,
            // FAQSeeder::class,
        ]);
    }
}
