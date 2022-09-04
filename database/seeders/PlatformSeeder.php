<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run()
    {
        $platforms = [
            'Youtube',
            'Vimeo',
        ];

        foreach ($platforms as $value) {
            Platform::create([
                'name' => $value
            ]);
        }
    }
}
