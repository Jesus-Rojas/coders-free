<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $prices = [
            [
                'name' => 'Gratis',
                'value' => 0,
            ],
            [
                'name' => '19.99 US$ (nivel 1)',
                'value' => 19.99,
            ],
            [
                'name' => '49.99 US$ (nivel 2)',
                'value' => 49.99,
            ],
            [
                'name' => '99.99 US$ (nivel 3)',
                'value' => 99.99,
            ],
        ];

        foreach ($prices as $value) {
            Price::create($value);
        }
    }
}
