<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'patient_name' => 'June Mar Fajardo',
                'purok' => 'Purok 1',
                'vaccine' => 'BCG',
                'dose' => '1st dose',
                'scheduled_at' => '2026-02-10',
                'status' => 'Done',
            ],
            [
                'patient_name' => 'Dwight Ramos',
                'purok' => 'Purok 2',
                'vaccine' => 'Pentavalent',
                'dose' => '2nd dose',
                'scheduled_at' => '2026-04-18',
                'status' => 'Done',
            ],
            [
                'patient_name' => 'Justin Brownlee',
                'purok' => 'Purok 3',
                'vaccine' => 'OPV',
                'dose' => '1st dose',
                'scheduled_at' => '2026-07-22',
                'status' => 'Done',
            ],
            [
                'patient_name' => 'Kai Sotto',
                'purok' => 'Purok 1',
                'vaccine' => 'Dengue Vaccine', // Vaccine of choice
                'dose' => '3rd dose',
                'scheduled_at' => '2026-12-07', // Birthday date entry
                'status' => 'Done',
            ],
            [
                'patient_name' => 'Scottie Thompson',
                'purok' => 'Purok 4',
                'vaccine' => 'MMR',
                'dose' => 'Booster',
                'scheduled_at' => '2026-10-10',
                'status' => 'Overdue',
            ],
            [
                'patient_name' => 'CJ Perez',
                'purok' => 'Purok 2',
                'vaccine' => 'Anti-Flu',
                'dose' => 'Annual',
                'scheduled_at' => '2026-10-22',
                'status' => 'Overdue',
            ],
            [
                'patient_name' => 'Chris Newsome',
                'purok' => 'Purok 3',
                'vaccine' => 'COVID-19 Booster',
                'dose' => '2nd Booster',
                'scheduled_at' => '2026-11-05',
                'status' => 'Scheduled',
            ],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
