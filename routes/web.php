<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});
Auth::routes();

// Route::get('/', function () {
//     return redirect('/admin');
// });


//Backend
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');

    Route::resource('/students',StudentController::class);
    Route::resource('/teachers',TeacherController::class);
    Route::resource('/courses',CoursesController::class);
    Route::resource('/batches',BatchController::class);
    Route::resource('/enrollments',EnrollmentController::class);
    Route::resource('/payments',PaymentController::class);
});
