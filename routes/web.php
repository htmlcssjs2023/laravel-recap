<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome/{id}', function ($name) {
//     return view('welcome');
// });


// Route::get('/', function(){
//     return "HELLO WORLD";
// });


// Route::get('/hello', function(){
//     $name = "Abdul Halim";
//     return view('hello', compact('name'));
// });

Route::get('/', function(){
    return view('hello');
});

Route::get('/user-list', [UserController::class, 'user_list']);

// Route::get('/',function(){
//     return view('home');
// });

Route::get('/', function(){
    return view('home');
});

Route::get('/student', [StudentController::class, 'studentInfo']);
Route::get('/home/department', [DepartmentController::class, 'department']);
Route::get('/home/course', [CourseController::class, 'courseList']);
