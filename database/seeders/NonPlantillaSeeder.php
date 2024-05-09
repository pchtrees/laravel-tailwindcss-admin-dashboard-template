<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NonPlantilla;

class NonPlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NonPlantilla::create([
            'position_title' => 'Non-Plantilla Position',
            'daily_rate' => 1000.50, // Adjust as needed
            'offices_id' => 1, // Replace with actual office ID
            'user_id' => 1, // Replace with actual user ID
            'casual_or_jo' => 1, // Example value
            'is_active' => true,
        ]);
    }
}
