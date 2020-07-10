<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
