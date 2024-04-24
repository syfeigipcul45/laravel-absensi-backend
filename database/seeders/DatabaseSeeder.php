<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Syafei Karim',
            'email' => 'syfei.karim@gmail.com',
            'password' => Hash::make("gipcul45")
        ]);

        // data dummy for Company
        Company::create([
            'name' => 'Politeknik Pertanian Negeri Samarinda',
            'email' => 'info@politanisamarinda.ac.id',
            'address' => 'Jalan Samratulangi Samarinda Seberang',
            'latitude' => '-0.5360059719368089',
            'longitude' => '117.12367319592614',
            'radius_km' => '0.5',
            'time_in' => '08.00',
            'time_out' => '16.00'
        ]);
    }
}
