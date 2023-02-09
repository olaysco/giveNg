<?php

namespace Tests\Unit;

use App\User;
use App\Givetem;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;

class GetMyGivetems extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserGetGivetemRouteExist()
    {
        $response = $this->get('/api/user/givetems');
        $this->assertNotEquals($response->status(), 404);
    }

    public function testUserGetGivetemSuccessful()
    {
        //arrangement
        $allGivetemsBefore = Givetem::all()->count();
        Sanctum::actingAs(
            User::factory()->create()
        );

        //action
        for ($i = 0; $i < 4; $i++) {
            $givetem = Givetem::factory()->make();
            $response = $this->postJson('api/givetem', $givetem->toArray());
        }

        //assert
        $response = $this->get('/api/user/givetems');
        $response->assertStatus(202);
    }
}
