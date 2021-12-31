<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('Pages.Home');
})->name('page.home');

Route::get('/alunos', function () {
    return view('Pages.Student');
})->name('page.student');

Route::get('/cursos', function (){
    return view('Pages.Course');
})->name('page.course');

/*
Route::get('/cursos', [CourseController::class, 'getAllCourses'])->name('course.all');
Route::get('/cursos/novo-curso', [CourseController::class, 'showFormNewCourse'])->name('course.formNewCourse');
Route::post('/cursos', [CourseController::class, 'createNewCourse'])->name('course.create');
*/
