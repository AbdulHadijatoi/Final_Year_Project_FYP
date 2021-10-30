<?php

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

Route::get('/', function () {
    return view('index');
});

// Route::get('tutor/dashboard', function () {
//     return view('tutor/dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('student/dashboard', function () {
    return view('student/dashboard');
})->name('dashboard');

// Route::get('admin/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Student\StudentController::class)->only([
            'index', 'show'
        ]);
    });
    Route::group(['middleware' => 'role:tutor', 'prefix' => 'tutor', 'as' => 'tutor.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Tutor\TutorController::class)->only([
            'index', 'show'
        ]);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Admin\AdminController::class)->only([
            'index', 'show'
        ]);
        
    });
});
