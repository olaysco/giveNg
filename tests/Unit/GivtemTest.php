<?php

namespace Tests\Unit;

use App\User;
use App\Givetem;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;

class GivtemTest extends TestCase
{
    /***
     * test the givetem post endpoint
     * exist
     *
     * @return void
     */
    public function testGivetemCreateRouteExist()
    {
        $response = $this->post('/api/givetem');
        $this->assertNotEquals($response->status(), 404);
    }

    /**
     * test a givetem can be created by
     * a user logged in
     *
     * @return void
     */
    public function testGivetemCreatedByUser()
    {
        $allGivetemsBefore = Givetem::all()->count();
        Sanctum::actingAs(
            factory(User::class)->create(),
            ['view-tasks']
        );
        $givetem = factory(Givetem::class)->make();
        $response = $this->postJson('api/givetem', $givetem->toArray());
        $allGivetemsAfter = Givetem::all()->count();
        $response->assertSuccessful();
        $this->assertGreaterThan($allGivetemsAfter, $allGivetemsBefore);
    }

    /**
     * Test a givetem cannot be created
     * by a user that is not logged in
     *
     * @return void
     */
    public function testGivetemCreateFailByNonUser()
    {
        $givetem = factory(Givetem::class)->make();
        $response = $this->postJson('api/givetem', $givetem->toArray());
        $response->assertUnauthorized();
    }
}
