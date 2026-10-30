<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Personalized health worker credential
        User::create([
            'name' => 'Christian',
            'email' => 'nurse.civiles@bakuna.test',
            'password' => Hash::make('bakuna2026'),
        ]);

        $this->call([
            VaccinationSeeder::class,
        ]);
    }
}