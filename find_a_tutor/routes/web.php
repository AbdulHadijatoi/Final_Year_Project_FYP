<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\Admin\StudentsController;
use \App\Http\Controllers\Admin\ParentsController;
use \App\Http\Controllers\Admin\TutorsController;
use \App\Http\Controllers\Tutor\CourseController;
use \App\Http\Controllers\Tutor\QuizController;
use \App\Http\Controllers\Tutor\DashboardController;
use \App\Http\Controllers\ListingController;
use \App\Http\Controllers\Parent\CoursesController;
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
        Route::resource('parents', ParentsController::class);
        Route::resource('tutors', TutorsController::class);
    });

    //Parent routes
    Route::group(['middleware' => 'role:parent', 'prefix' => 'parent', 'as' => 'parent.'], function(){
        Route::resource('dashboard', \App\Http\Controllers\Parent\ParentController::class);
        Route::resource('courses', CoursesController::class);
        Route::resource('enroll-course', \App\Http\Controllers\Parent\EnrollCourseController::class);
        Route::resource('progress', \App\Http\Controllers\Parent\ProgressController::class);
        Route::resource('view-child', \App\Http\Controllers\Parent\ViewChildController::class);
        Route::resource('add-child', \App\Http\Controllers\Parent\AddChildController::class);
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
        Route::resource('dashboard', DashboardController::class);
        Route::resource('add-course', \App\Http\Controllers\Tutor\AddCourseController::class);
        Route::resource('courses', \App\Http\Controllers\Tutor\CoursesController::class);
        Route::resource('create-quiz', \App\Http\Controllers\Tutor\CreateQuizController::class);
        Route::resource('make-profile', \App\Http\Controllers\Tutor\MakeProfileController::class);
        Route::resource('quiz', QuizController::class);
        Route::resource('quizes', \App\Http\Controllers\Tutor\QuizesController::class);
        Route::resource('students', \App\Http\Controllers\Tutor\StudentsController::class);
        Route::resource('course', CourseController::class);
    });

    Route::post('/admin/tutors', [TutorsController::class , 'search'])->name('AdminTutorSearch');
    Route::post('/admin/students', [StudentsController::class , 'search'])->name('AdminStudentSearch');
    Route::get('/admin/parents', [ParentsController::class , 'search'])->name('AdminParentSearch');
    Route::post('/tutor/quiz', [QuizController::class, 'addQuestion'])->name('add_question_route');
    Route::post('/tutor/dashboard1', [DashboardController::class,'getSchedule'])->name('get_schedule');
    Route::post('/parent/courses', [CoursesController::class,'filter_student_courses'])->name('get_student_courses');
    Route::get('/student/quizesfilter', [\App\Http\Controllers\Student\QuizesController::class,'filterQuizes'])->name('filter_quizes');
    Route::post('/tutor/dashboard', [DashboardController::class,'setSchedule'])->name('set_schedule');
    
    Route::resource('photo', \App\Http\Controllers\PhotoController::class);

});



Route::get('profile/{username}',[ProfileController::class, 'show'])->name('profile');
Route::resource('/listing', ListingController::class);
Route::get('/listing', [ListingController::class,'search'])->name('search_tutors');

// Route::post('____', [____::class,'____'])->name('_____');