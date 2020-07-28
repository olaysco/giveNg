<?php

namespace Tests\Unit;

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
        $response = $this->get('/user/givetems');
        $this->assertNotEquals($response->status(), 404);
    }

    public function testUserGetGivetemSuccessful()
    {
        //arrangement
        $allGivetemsBefore = Givetem::all()->count();
        Sanctum::actingAs(
            factory(User::class)->create()
        );

        //action
        for ($i = 0; $i < 4; $i++) {
            $givetem = factory(Givetem::class)->make();
            $response = $this->postJson('api/givetem', $givetem->toArray());
        }

        //assert
        $response = $this->get('/user/givetems');
        $this->assertGreaterThanOrEqual(4, $response->count());
    }
}
