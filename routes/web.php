<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VolunteerOpportunityController;
use Illuminate\Support\Facades\Route;

$publicPages = [
    '/' => 'stitch.landing-page',
    'landing-page' => 'stitch.landing-page',
    'browse-donations' => 'stitch.browse-donations',
];

foreach ($publicPages as $uri => $view) {
    $route = Route::view($uri, $view);

    if ($uri === 'landing-page') {
        $route->name('landing-page');
    } elseif ($uri === 'browse-donations') {
        $route->name('browse-donations');
    }
}

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('email/verify', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('email/verify/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::middleware('verified')->group(function () {
        Route::get('home-feed', [PostController::class, 'index'])->name('dashboard');
        Route::get('create-post', [PostController::class, 'create'])->name('create-post');
        Route::get('browse-donations', [DonationController::class, 'index'])->name('browse-donations');
        Route::get('volunteer-hub', [VolunteerOpportunityController::class, 'index'])->name('volunteer-hub');
        Route::get('ngo-directory', [NgoController::class, 'index'])->name('ngo-directory');
        Route::get('messages', fn () => view('stitch.messages'))->name('messages');
        Route::get('notifications', fn () => view('stitch.notifications'))->name('notifications');
        Route::get('user-dashboard', fn () => view('stitch.user-dashboard'))->name('user-dashboard');
        Route::get('user-profile', fn () => view('stitch.user-profile'))->name('user-profile');
        Route::get('admin-dashboard', fn () => view('stitch.admin-dashboard'))->name('admin-dashboard');

        Route::resource('posts', PostController::class)->names('posts');
        Route::resource('donations', DonationController::class)->names('donations');
        Route::resource('ngos', NgoController::class)->names('ngos');
        Route::resource('volunteer-opportunities', VolunteerOpportunityController::class)->names('volunteer-opportunities');
        Route::resource('conversations', ConversationController::class)->names('conversations');
        Route::resource('message-threads', MessageController::class)->names('messages');
        Route::resource('notifications-resource', NotificationController::class)->names('notifications-resource');
        Route::resource('reports', ReportController::class)->names('reports');
    });
});
