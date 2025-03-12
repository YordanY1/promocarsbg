<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Promo CarsBG',
            'email' => 'promocarsbg@gmail.com',
            'password' => 'promocars123',
            'email_verified_at' => Carbon::now(),
            'is_admin' => true,
        ]);
    }
}
