<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Feedback routes
    Route::resource('feedback', 'App\Http\Controllers\FeedbackController');

    // AI Models routes
    Route::resource('ai-models', 'App\Http\Controllers\AiModelController');

    // Providers routes
    Route::resource('providers', 'App\Http\Controllers\ProviderController');

    // Inspirations routes
    Route::resource('inspirations', 'App\Http\Controllers\InspirationController');

    // Pages routes
    Route::resource('pages', 'App\Http\Controllers\PageController');

    // Ads routes
    Route::resource('ads', 'App\Http\Controllers\AdController');

    // API Keys routes
    Route::resource('api-keys', 'App\Http\Controllers\ApiKeyController');

    // Users routes
    Route::resource('users', 'App\Http\Controllers\UserController');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
