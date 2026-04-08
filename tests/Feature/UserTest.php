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


it('does not allow duplicate emails', function() {

    User::factory()->create([
        'email' => 'test@email.com'
    ]);

    User::factory()->create([
        'email' => 'test@email.com'
    ]);
})->throws(\Illuminate\Database\QueryException::class);
