<?php

use App\Http\Controllers\{
    CourseController,
    HomeController,
};
use Illuminate\Support\Facades\Route;

Route::get('', HomeController::class)->name('home');

Route::group([
    'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'],
], function () {
    Route::get('dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');
    Route::get('cursos/{course:slug}', [CourseController::class, 'show'])->name('courses.show');
});
