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
            factory(User::class)->create()
        );
        $givetem = factory(Givetem::class)->make();
        $response = $this->postJson('api/givetem', $givetem->toArray());
        $allGivetemsAfter = Givetem::all()->count();
        $response->assertSuccessful();
        $this->assertGreaterThan($allGivetemsBefore, $allGivetemsAfter);
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

    /**
     * Test all givetems in the db
     * are retreived successfully
     *
     * @return void
     */
    public function testAllGivetemsRetrievedSuccessfully()
    {
        $allGivetem = Givetem::all();
        $response = $this->getJson('/api/givetems');
        $response->assertExactJson($allGivetem->toArray());
    }

    /**
     * Test givetm can be updated
     * by its creator (i.e user)
     *
     * @return void
     */
    public function testGivetemUpdateByItsCreator()
    {
        Sanctum::actingAs(
            factory(User::class)->create()
        );
        $givetem = factory(Givetem::class)->make();
        $response = $this->postJson('api/givetem', $givetem->toArray());
        $givetem->rating = 0;
        $response = $this->postJson("api/givetem/{$givetem->id}", $givetem->toArray());
        $response->assertSuccessful();
        $response->assertJsonPath("rating", $givetem->rating);
    }

    /**
     * Test givetm cannot be updated
     * by unathorized user
     *
     * @return void
     */
    public function testGivetemCannotUpdateByInvalidUser()
    {
        Sanctum::actingAs(
            factory(User::class)->create()
        );
        $givetem = factory(Givetem::class)->make();
        $response = $this->postJson('api/givetem', $givetem->toArray());
        $givetem->user_id = 0;
        $updateResponse = $this->patchJson("api/givetem/update/{$givetem->id}", $givetem->toArray());
        $updateResponse->assertStatus(403);
    }
}
