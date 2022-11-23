<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alma Putri',
            'email' => 'almaputri@tradervibes.id',
            'email_verified_at' => now(),
            'username' => 'almaputri',
            'password' => bcrypt('password')
        ]);
    }
}
