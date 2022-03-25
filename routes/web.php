<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\DashboardJobController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Language;
use App\Models\User;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/all-jobs', [JobController::class, 'allJobs']);
Route::get('/jobs/{job:slug}', [JobController::class, 'show']);

Route::get('/jobs/{job:slug}/payment', [PaymentController::class, 'index']);
Route::get('/jobs/{job:slug}/payment/success', [PaymentController::class, 'success']);

Route::get('/freelancers', [FreelancerController::class, 'index']);

Route::get('/{user:username}', [UserController::class, 'show']);

Route::get('/profile/{user:username}', [DashboardUserController::class, 'show'])->middleware('auth');
Route::get('/profile/{user:username}/edit', [DashboardUserController::class, 'edit'])->middleware('auth');
Route::put('/profile/{user:username}', [DashboardUserController::class, 'update'])->middleware('auth');

Route::post('/language', [LanguageController::class, 'store'])->middleware('auth');
Route::put('/language/{language:id}', [LanguageController::class, 'update'])->middleware('auth');
Route::delete('/language/{language:id}', [LanguageController::class, 'destroy'])->middleware('auth');

Route::post('/education', [EducationController::class, 'store'])->middleware('auth');
Route::put('/education/{education:id}', [EducationController::class, 'update'])->middleware('auth');
Route::delete('/education/{education:id}', [EducationController::class, 'destroy'])->middleware('auth');

Route::post('/certification', [CertificationController::class, 'store'])->middleware('auth');
Route::put('/certification/{certification:id}', [CertificationController::class, 'update'])->middleware('auth');
Route::delete('/certification/{certification:id}', [CertificationController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard/jobs/checkSlug',[DashboardJobController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/jobs/create', [DashboardJobController::class, 'create'])->middleware('auth');
Route::post('/dashboard/jobs', [DashboardJobController::class, 'store'])->middleware('auth');
Route::get('/dashboard/jobs/{job:slug}/edit', [DashboardJobController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/jobs/{job:slug}', [DashboardJobController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/jobs/{job:slug}', [DashboardJobController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard/verify',[AdminController::class, 'showVerifyFreelancer'])->middleware('is_admin');
Route::put('/dashboard/verify/{user:username}', [AdminController::class, 'verifyFreelancer'])->middleware('is_admin');
Route::delete('/dashboard/verify/{user:username}', [AdminController::class, 'destroy'])->middleware('is_admin');

// Route::resource('/dashboard/profiles', DashboardUserController::class)->middleware('auth');
