<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    // public static $BASE_URL = 'https://placehold.jp'; // in vendor/fzaninotto/faker/src/providers\Image.php

    public function definition()
    {
        return [
            'url' => 'cursos/' . $this->faker->image('public/storage/cursos', 640, 480, null, false),
        ];
    }
}
