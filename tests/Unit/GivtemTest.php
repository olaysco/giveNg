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
        $user = factory(User::class)->create();
        Sanctum::actingAs(
            $user
        );
        $response = $this->postJson(
            'api/givetem',
            factory(Givetem::class)
                ->make()
                ->toArray()
        );
        $givetem = $response->decodeResponseJson();
        $response = $this->patchJson("api/givetem/{$givetem['id']}", $givetem);
        $response->assertSuccessful();
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
        $givetem = factory(Givetem::class)->make()->toArray();
        $response = $this->postJson("api/givetem", $givetem);
        $d = $response->decodeResponseJson()['id'];
        Sanctum::actingAs(
            factory(User::class)->create()
        );
        $updateResponse = $this->patchJson("api/givetem/$d", $givetem);
        $updateResponse->assertStatus(403);
    }

    /**
     * Test givetm deleted by user
     *
     * @return void
     */
    // public function testGivetemDeletedbyUser()
    // {;
    //     Sanctum::actingAs(factory(User::class)->create());
    //     $givetem = factory(Givetem::class)->create();
    //     $e = $this->postJson('api/givetem', $givetem->toArray());
    //     $response = $this->call("delete", "api/givetem/$givetem->id");
    //     $response->assertSuccessful();
    // }
}
