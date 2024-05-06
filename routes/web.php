<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgrammerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Calom ba xama!!!";
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profile.blade', function(){
    return view('profile.blade');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/teachers', [TeacherController::class,'index']);

Route::get('/familys', [FamilyController::class,'inde']);

Route::get('/schools', [SchoolController::class,'inschool']);

Route::get('/', function(){
    return view('index');
});



Route::get('/',function(){
    return view('index');
});


Route::get('/students',function(){
    return view('layouts.students');
});
/*
Route::get('/students', [StudentController::class,'index'])->name('students.index');
Route::get('/students/create', [StudentController::class,'create'])->name('students.create');
Route::get('/students/store', [StudentController::class,'store'])->name('students.store');
*/
Route::resource('student', StudentController::class);

Route::get('/', function() {
    return view('welcome');
});
Route::get('/index', function(){
    return view('layouts/app');
});

Route::resource('programmers', ProgrammerController::class);

Route::resource('news',NewsController::class);
