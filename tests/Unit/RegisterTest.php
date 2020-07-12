<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Faker\Factory as Faker;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * Test user registeration succeds
     *  when all fields are valid
     * endpoint: /api/register
     *
     * @return void
     */
    public function testUserRegisterationSuccess()
    {
        $faker = Faker::create();
        $password = $faker->password();
        $response = $this->json('POST', '/register', [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => $password,
            'password_confirmation' => $password,
        ]);
        $response
            ->assertStatus(201);
    }

    /**
     * Test user registeration
     * fails when fields are invalid
     * endpoint: /api/register
     *
     * @return void
     */
    public function testUserRegisterationFails()
    {
        $faker = Faker::create();
        $password = $faker->password();
        $response = $this->json('POST', '/register', [
            'name' => $faker->name(),
            'email' => '',
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $this->assertNotEquals($response->status(), 201);
    }
}
