<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Recommendation;
use App\Models\Restaurant;
use App\Models\Touristic_place;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     * @return void
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'id' => '1',
            'name' => 'admin',
            'birthday' => '2001-09-23',
            'phone' => '1234567891',
            'email' => 'juan@juan.com',
            'password' => bcrypt('admin'),
            'user_type' => 'normal',
        ]);

    }
}
