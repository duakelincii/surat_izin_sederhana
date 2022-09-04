<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/read', [App\Http\Controllers\HomeController::class, 'read'])->name('home.read');

Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');
Route::get('/course/read', [App\Http\Controllers\CourseController::class, 'read'])->name('course.read');
Route::get('/course/create', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
Route::get('/course/store', [App\Http\Controllers\CourseController::class, 'store'])->name('course.simpan');
Route::get('/course/show/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.edit');
Route::get('/course/update/{id}', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update');
Route::get('/course/destroy/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course.delete');

Route::get('/assignment', [App\Http\Controllers\AssignmentController::class, 'index'])->name('assignment');
Route::get('/assignment/read', [App\Http\Controllers\AssignmentController::class, 'read'])->name('assignment.read');
Route::get('/assignment/create', [App\Http\Controllers\AssignmentController::class, 'create'])->name('assignment.create');
Route::get('/assignment/store', [App\Http\Controllers\AssignmentController::class, 'store'])->name('assignment.simpan');
Route::get('/assignment/show/{id}', [App\Http\Controllers\AssignmentController::class, 'show'])->name('assignment.edit');
Route::get('/assignment/update/{id}', [App\Http\Controllers\AssignmentController::class, 'update'])->name('assignment.update');
Route::get('/assignment/destroy/{id}', [App\Http\Controllers\AssignmentController::class, 'destroy'])->name('assignment.delete');

Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report');
Route::get('/report/read', [App\Http\Controllers\ReportController::class, 'read'])->name('report.read');
Route::get('/report/create', [App\Http\Controllers\ReportController::class, 'create'])->name('report.create');
Route::get('/report/store', [App\Http\Controllers\ReportController::class, 'store'])->name('report.simpan');
Route::get('/report/show/{id}', [App\Http\Controllers\ReportController::class, 'show'])->name('report.edit');
Route::get('/report/update/{id}', [App\Http\Controllers\ReportController::class, 'update'])->name('report.update');
Route::get('/report/destroy/{id}', [App\Http\Controllers\ReportController::class, 'destroy'])->name('report.delete');

