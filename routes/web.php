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
        $protectedPages = [
            'home-feed' => 'stitch.home-feed',
            'volunteer-hub' => 'stitch.volunteer-hub',
            'user-dashboard' => 'stitch.user-dashboard',
            'user-profile' => 'stitch.user-profile',
            'create-post' => 'stitch.create-post',
            'messages' => 'stitch.messages',
            'notifications' => 'stitch.notifications',
            'ngo-directory' => 'stitch.ngo-directory',
            'admin-dashboard' => 'stitch.admin-dashboard',
        ];

        foreach ($protectedPages as $uri => $view) {
            $route = Route::view($uri, $view);

            if ($uri === 'home-feed') {
                $route->name('dashboard');
            } elseif ($uri === 'create-post') {
                $route->name('create-post');
            } elseif ($uri === 'messages') {
                $route->name('messages');
            } elseif ($uri === 'notifications') {
                $route->name('notifications');
            } elseif ($uri === 'ngo-directory') {
                $route->name('ngo-directory');
            } elseif ($uri === 'volunteer-hub') {
                $route->name('volunteer-hub');
            } elseif ($uri === 'user-dashboard') {
                $route->name('user-dashboard');
            } elseif ($uri === 'user-profile') {
                $route->name('user-profile');
            } elseif ($uri === 'admin-dashboard') {
                $route->name('admin-dashboard');
            } else {
                $route->name(str_replace('-', '.', $uri));
            }
        }

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
