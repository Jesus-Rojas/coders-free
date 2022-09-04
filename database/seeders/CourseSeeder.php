<?php

namespace Database\Seeders;

use App\Models\{
    Audience,
    Course,
    Description,
    Goal,
    Image,
    Lesson,
    Requirement,
    Section,
};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = Course::factory(40)->create();

        foreach ($courses as $course) {
            Image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => Course::class,
            ]);

            $data = ['course_id' => $course->id];

            Requirement::factory(4)->create($data);
            Goal::factory(4)->create($data);
            Audience::factory(4)->create($data);

            $sections = Section::factory(4)->create($data);

            foreach ($sections as $section) {
                $lessons = Lesson::factory(4)->create(['section_id' => $section->id]);
                foreach ($lessons as $lesson) {
                    Description::factory(1)->create(['lesson_id' => $lesson->id]);
                }
            }
        }
    }
}
