<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Lift',
            'email' => 'adminlift@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
