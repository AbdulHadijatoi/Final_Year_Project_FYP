<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('index', ['title' => 'Home']);
});

Route::get('/listing', function () {
    return view('listing', ['title' => 'Listing']);
});

Route::get('/tutor/profile', function () {
    return view('tutor/profile', ['title' => 'Profile']);
});

Route::get('/student/profile', function () {
    return view('student/profile', ['title' => 'Profile']);
});

// Route::get('/signup', function () {
//     return view('account/signup', ['title' => 'Signup']);
// });

// Route::get('/login', function () {
//     return view('account/login', ['title' => 'Login']);
// });

// Route::get('/forgot-password', function () {
//     return view('account/forgot-password', ['title' => 'Forgot Password']);
// });

// Route::get('/reset-password', function () {
//     return view('account/reset-password', ['title' => 'Reset Password']);
// });

// Route::get('/tutor/dashboard', function () {
//     return view('tutor/dashboard', ['title' => 'Tutor Dashboard']);
// });

Route::get('/tutor/courses', function () {
    return view('tutor/courses', ['title' => 'Courses']);
});

Route::get('/tutor/add-course', function () {
    return view('tutor/add-course', ['title' => 'Add Courses']);
});

Route::get('/tutor/create-quiz', function () {
    return view('tutor/create-quiz', ['title' => 'Create Quiz']);
});

Route::get('/tutor/make-profile', function () {
    return view('tutor/make-profile', ['title' => 'Make Profile']);
});

Route::get('/tutor/students', function () {
    return view('tutor/students', ['title' => 'Students']);
});

Route::get('/tutor/quizes', function () {
    return view('tutor/quizes', ['title' => 'Quizes']);
});

Route::get('/tutor/quiz', function () {
    return view('tutor/quiz', ['title' => 'Quiz']);
});
Route::get('/tutor/course', function () {
    return view('tutor/course', ['title' => 'Course']);
});

Route::get('/student/take-quiz', function () {
    return view('student/take-quiz', ['title' => 'Take Quiz']);
});

Route::get('/student/courses', function () {
    return view('student/courses', ['title' => 'Courses']);
});

Route::get('/student/dashboard', function () {
    return view('student/dashboard', ['title' => 'Student Dashboard']);
});

Route::get('/student/enroll-course', function () {
    return view('student/enroll-course', ['title' => 'Enroll Course']);
});

Route::get('/student/make-profile', function () {
    return view('student/make-profile', ['title' => 'Make Profile']);
});

Route::get('/student/quizes', function () {
    return view('student/quizes', ['title' => 'View All Quiz']);
});

Route::get('/admin/add-tutor', function () {
    return view('admin/add-tutor', ['title' => 'Add Tutor']);
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard', ['title' => 'Admin Dashboard']);
});

Route::get('/admin/students', function () {
    return view('admin/students', ['title' => 'Students']);
});

Route::get('/admin/tutors', function () {
    return view('admin/tutors', ['title' => 'Tutors']);
});


Route:: get('/account/forgotPassword',[MainController::class,'forgotPassword'])->name('account.forgot-password');
Route:: get('/account/resetPassword',[MainController::class,'resetPassword'])->name('account.reset-password');
Route:: post('/account/save',[MainController::class,'save'])->name('account.save');
Route::post('/account/check',[MainController::class,'check'])->name('account.check');
Route::get('/account/logout',[MainController::class,'logout'])->name('account.logout');



// Route::get('/{profileName}',function($profileName){
//     return $profileName;
// });

Route::group(['middleware'=>['AuthCheck']], function(){
    Route:: get('login',[MainController::class,'login'])->name('account.login');
    Route:: get('signup',[MainController::class,'signup'])->name('account.signup');

    Route::get('/tutor/dashboard',[MainController::class,'tutorDashboard']);
});