<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Course $course)
    {
        $similares = Course::where([
                ['id', '!=', $course->id],
                ['category_id', $course->category_id],
                ['status', 3],
            ])
            ->latest()
            ->take(5)
            ->get();

        return view('courses.show', compact('course', 'similares'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
