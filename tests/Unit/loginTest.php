<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    /**
     * Test user login fails
     * on wrong login details
     *
     * @return void
     */
    public function testLoginFailed() : void
    {
        $user = factory(User::class)->create();
        $response = $this->postJson('/api/login', [
            "email" => $user->email,
            "password" => "wrongPassword"
        ]);
        $response->assertStatus(422);
    }
}
