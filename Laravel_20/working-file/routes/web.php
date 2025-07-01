<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes Start
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\ErrorController;

/*
|--------------------------------------------------------------------------
| Frontend Routes Close
|--------------------------------------------------------------------------
*/



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

// Route::get('/', function () {
//     return view('frontend.home');
// });


/*
|--------------------------------------------------------------------------
| Frontend Routes Start
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/course-details', [CourseController::class, 'details'])->name('course.course-details');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'details'])->name('blog.blog-details');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team-details', [TeamController::class, 'details'])->name('team.team-details');
Route::get('/conatct', [ContactController::class, 'index'])->name('contact');


/*
|--------------------------------------------------------------------------
| Frontend Routes End
|--------------------------------------------------------------------------
*/
