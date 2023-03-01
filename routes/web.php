<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogAtController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\AuthenticateOnlyEmail;
use App\Http\Controllers\LogGateController;
use App\Events\UserLoginHistory;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest', 'prevent-back-history')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest', 'prevent-back-history')->name('login');
// Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified', 'prevent-back-history'])->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('prevent-back-history')->name('logout');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.reset');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
// Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/login', [AuthenticateOnlyEmail::class, 'create']);

Route::get('/event', function (){
    return view('event-demo');
})->name('event-demo');
Route::post('/event', [EventController::class, 'index'])->name('event-post');

Route::get('/logat', [LogAtController::class, 'index'])->name('logat');
Route::post('/logat', [LogAtController::class, 'mailto'])->name('logat.post');

Route::get('/logate', [LogGateController::class, 'index'])->name('logate');
Route::post('/logate', [LogGateController::class, 'store'])->name('logate.post');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
