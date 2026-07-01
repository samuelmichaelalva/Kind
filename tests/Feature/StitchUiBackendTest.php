<?php

use App\Models\Post;
use App\Models\User;

it('shows saved posts on the home feed', function () {
    $user = User::factory()->create();
    $post = Post::factory()->create([
        'user_id' => $user->id,
        'title' => 'Need groceries this week',
        'body' => 'A local family needs pantry staples.',
    ]);

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee($post->title);
    $response->assertSee($post->body);
});

it('creates a post from the stitch create-post form', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('posts.store'), [
        'title' => 'Need a ride to the clinic',
        'body' => 'Can someone help with transportation this afternoon?',
        'type' => 'request',
        'status' => 'published',
        'location' => 'Queens',
    ]);

    $response->assertRedirect(route('dashboard'));
    $this->assertDatabaseHas('posts', [
        'user_id' => $user->id,
        'title' => 'Need a ride to the clinic',
        'location' => 'Queens',
    ]);
});
