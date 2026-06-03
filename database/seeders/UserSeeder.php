<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan query insert
User::create([
    'name' => 'Andhika Rizky',
    'email' => 'admin@gmail.com',
    'password' => Hash::make('12345')
]);
    }
}
