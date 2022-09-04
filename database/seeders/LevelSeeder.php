<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    public function run()
    {
        $levels = [
            'Nivel Básico',
            'Nivel Intermedio',
            'Nivel Avanzado',
        ];

        foreach ($levels as $value) {
            Level::create([
                'name' => $value,
            ]);
        }
    }
}
