<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'José Solís',
            'email' => 'j.solisgom@gmail.com',
            'password' => bcrypt('12345'),
        ])->assignRole('Admin');

        // User::factory()->count(10)->create();
    }
}
