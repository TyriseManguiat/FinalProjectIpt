<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public Routes (No authentication required)
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Add login route
Route::post('/login', [AuthController::class, 'login']); // Add login post route

// Auth Routes
Auth::routes();

// Protected Routes (Require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/start', [StartController::class, 'showStartPage'])->name('start');
    Route::get('/message', [MessageController::class, 'showMessagePage'])->name('message');
    Route::get('/diaries', [DiaryController::class, 'showDiaries'])->name('diaries');
    Route::get('/feedback', [FeedbackController::class, 'showFeedbackForm'])->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'submitFeedback']);

    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Other Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register'); // This will use the resources/views/register.blade.php
});