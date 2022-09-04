<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::whereStatus(3)->latest()->take(12)->get();

        return view('welcome', compact('courses'));
    }
}
