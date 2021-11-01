<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\Admin\StudentsController;
use \App\Http\Controllers\Admin\TutorsController;
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

Route::get('student/profile', function () {
    return view('student/profile');
})->name('profile');

Route::get('tutor/profile', function () {
    return view('tutor/profile');
})->name('profile');



require __DIR__.'/auth.php';

// Route::group(['middleware' => ['auth', 'active_user']], function() {
//     Route::get('/', function () {
//         return view('index');
//     });
//     // ... Any other routes that are accessed only by non-blocked user
// });

Route::group(['middleware' => 'auth'], function(){
    
    //Admin routes
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Admin\DashboardController::class);
        Route::resource('add-user', \App\Http\Controllers\Admin\AddUserController::class);
        Route::resource('students', StudentsController::class);
        Route::resource('tutors', TutorsController::class);
    });

    //Student routes
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Student\DashboardController::class);
        Route::resource('courses', \App\Http\Controllers\Student\CoursesController::class);
        Route::resource('enroll-course', \App\Http\Controllers\Student\EnrollCourseController::class);
        Route::resource('make-profile', \App\Http\Controllers\Student\MakeProfileController::class);
        Route::resource('quizes', \App\Http\Controllers\Student\QuizesController::class);
        Route::resource('take-quiz', \App\Http\Controllers\Student\TakeQuizController::class);
    });

    //Tutor routes
    Route::group(['middleware' => 'role:tutor', 'prefix' => 'tutor', 'as' => 'tutor.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Tutor\DashboardController::class);
        Route::resource('add-course', \App\Http\Controllers\Tutor\AddCourseController::class);
        Route::resource('courses', \App\Http\Controllers\Tutor\CoursesController::class);
        Route::resource('create-quiz', \App\Http\Controllers\Tutor\CreateQuizController::class);
        Route::resource('make-profile', \App\Http\Controllers\Tutor\MakeProfileController::class);
        Route::resource('quiz', \App\Http\Controllers\Tutor\QuizController::class);
        Route::resource('quizes', \App\Http\Controllers\Tutor\QuizesController::class);
        Route::resource('students', \App\Http\Controllers\Tutor\StudentsController::class);
        Route::resource('course', \App\Http\Controllers\Tutor\CourseController::class);
    });

    Route::post('/admin/tutors', [TutorsController::class , 'search'])->name('AdminTutorSearch');
    Route::post('/admin/students', [StudentsController::class , 'search'])->name('AdminStudentSearch');

});


Route::get('/profile/{id}',[ProfileController::class, 'show'])->name('profile');