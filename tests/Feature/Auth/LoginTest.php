<?php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

it('allows a user to login with valid credentials', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password123'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password123',
    ]);

    $response->assertRedirect();
    $this->assertAuthenticatedAs($user);
});

it('does not allow login with invalid password', function () {

    $user = User::factory()->create([
        'password' => Hash::make('password123'),
    ]);

    $response = $this->from('/login')->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertRedirect('/login');

    $this->assertGuest();

});

it('does not allow inactive users to login', function () {

    $user = User::factory()->inactive()->create([
        'password' => Hash::make('password123'),
        'is_active' => false,
    ]);

    $response = $this->from('/login')->post('/login', [
        'email' => $user->email,
        'password' => 'password123',
    ]);

    $response->assertRedirect('/login');
    $this->assertGuest();

});

it('allows an authenticated user to logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $response->assertRedirect('/');
    $this->assertGuest();
});
