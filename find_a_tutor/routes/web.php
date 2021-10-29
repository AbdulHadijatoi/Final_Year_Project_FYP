<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream

=======
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
>>>>>>> Stashed changes
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

Route::get('/signup', function () {
    return view('account/signup', ['title' => 'Signup']);
});

Route::get('/login', function () {
    return view('account/login', ['title' => 'Login']);
});

Route::get('/forgot-password', function () {
    return view('account/forgot-password', ['title' => 'Forgot Password']);
});

Route::get('/reset-password', function () {
    return view('account/reset-password', ['title' => 'Reset Password']);
});

Route::get('/tutor/dashboard', function () {
    return view('tutor/dashboard', ['title' => 'Tutor Dashboard']);
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

<<<<<<< Updated upstream

Route::get('/{profileName}',function($profileName){
    return $profileName;
=======
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

    // TUTOR ROUTES
    Route::get('/tutor/dashboard',[TutorController::class,'tutorDashboard']);
    Route::get('/tutor/courses', [TutorController::class,'tutorCourses']);
    Route::get('/tutor/add-course', [TutorController::class,'tutorAddCourse']);
    Route::get('/tutor/create-quiz', [TutorController::class,'tutorCreateQuiz']);
    Route::get('/tutor/make-profile', [TutorController::class,'tutorMakeProfile']);
    Route::get('/tutor/students', [TutorController::class,'tutorStudents']);
    Route::get('/tutor/quizes', [TutorController::class,'tutorQuizes']);
    Route::get('/tutor/quiz', [TutorController::class,'tutorQuiz']);
    Route::get('/tutor/course', [TutorController::class,'tutorCourse']);

    // STUDENT ROUTE
    Route::get('/student/take-quiz', [StudentController::class,'studentTakeQuiz']);
    Route::get('/student/courses', [StudentController::class,'studentCourses']);
    Route::get('/student/dashboard', [StudentController::class,'studentDashboard']);
    Route::get('/student/enroll-course', [StudentController::class,'studentEnrollCourse']);
    Route::get('/student/make-profile', [StudentController::class,'studentMakeProfile']);
    Route::get('/student/quizes', [StudentController::class,'studentQuizes']);
>>>>>>> Stashed changes
});