<?php

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;

uses(RefreshDatabase::class);

it('registers a user and saves the location', function () {
    $response = $this->post('/register', [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'password' => 'Password123!',
        'password_confirmation' => 'Password123!',
        'location' => 'Seattle',
    ]);

    $response->assertRedirect('/email/verify');
    $this->assertAuthenticated();

    $user = User::where('email', 'jane@example.com')->firstOrFail();
    expect($user->location)->toBe('Seattle');
});

it('logs in and logs out a user', function () {
    $user = User::factory()->create([
        'email' => 'login@example.com',
        'password' => bcrypt('Password123!'),
    ]);

    $loginResponse = $this->post('/login', [
        'email' => $user->email,
        'password' => 'Password123!',
    ]);

    $loginResponse->assertRedirect('/home-feed');
    $this->assertAuthenticatedAs($user);

    $logoutResponse = $this->post('/logout');
    $logoutResponse->assertRedirect('/');
    $this->assertGuest();
});

it('sends and processes a password reset request', function () {
    Notification::fake();
    $user = User::factory()->create();

    $viewResponse = $this->get('/forgot-password');
    $viewResponse->assertStatus(200);
    $viewResponse->assertViewIs('stitch.forgot-password');

    $requestResponse = $this->post('/forgot-password', [
        'email' => $user->email,
    ]);

    $requestResponse->assertRedirect();

    $token = null;
    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use (&$token) {
        $token = $notification->token;

        return true;
    });

    expect($token)->not->toBeNull();

    $resetResponse = $this->post('/reset-password', [
        'token' => $token,
        'email' => $user->email,
        'password' => 'NewPassword123!',
        'password_confirmation' => 'NewPassword123!',
    ]);

    $resetResponse->assertRedirect(route('login'));
});

it('shows the email verification notice and verifies the email', function () {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    $this->actingAs($user);

    $noticeResponse = $this->get('/email/verify');
    $noticeResponse->assertStatus(200);
    $noticeResponse->assertViewIs('stitch.email-verification');

    $signedUrl = URL::temporarySignedRoute('verification.verify', now()->addMinutes(30), [
        'id' => $user->getKey(),
        'hash' => sha1($user->getEmailForVerification()),
    ]);

    $verifyResponse = $this->get($signedUrl);
    $verifyResponse->assertRedirect('/home-feed?verified=1');
    expect($user->fresh()->email_verified_at)->not->toBeNull();
});
