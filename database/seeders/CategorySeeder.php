<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Desarrollo web',
            'Diseño web',
            'Programación',
        ];

        foreach ($categories as $value) {
            Category::create([
                'name' => $value,
            ]);
        }
    }
}
