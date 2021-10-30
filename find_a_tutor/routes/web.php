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

Route::get('tutor/dashboard', function () {
    return view('tutor/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('student/dashboard', function () {
    return view('student/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register'); 
    });

    Route::middleware(['auth'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
    });
});