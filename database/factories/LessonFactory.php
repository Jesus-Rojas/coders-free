<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => env('EMBED_COURSE_NEW'),
            'iframe' => env('IFRAME_COURSE_NEW'),
            'platform_id' => 1
        ];
    }
}
