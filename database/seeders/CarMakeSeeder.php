<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarMake;
use Illuminate\Support\Facades\File;

class CarMakeSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(database_path('data.json')); 
        $brands = json_decode($json, true);

        foreach ($brands as $brand) {
            $logo = isset($brand['image']['optimized']) ? $brand['image']['optimized'] : null;

            if ($logo) {
                CarMake::updateOrCreate([
                    'name' => $brand['name']
                ], [
                    'logo' => $logo
                ]);
            }
        }
    }
}
