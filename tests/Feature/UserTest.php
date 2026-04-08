<?php

use App\Models\User;

it('creates an admin user', function () {
    $user = User::factory()->admin()->create();

    expect($user->role)->toBe('admin');
});

it('creates a user with default role author', function() {
    $user = User::factory()->create();

    expect($user->role)->toBe('author');
});

it('creates an inactive user', function() {
    $user = User::factory()->inactive()->create();

    expect($user->is_active)->toBeFalse();
});
