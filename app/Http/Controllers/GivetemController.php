<?php

namespace App\Http\Controllers;

use App\Givetem;
use App\Http\Requests\GivetemStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class GivetemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new Response(Givetem::all(), 200);
    }

    /**
     * Store a newly created givetem in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GivetemStoreRequest $request)
    {
        $givetem = Givetem::create($request->all(), [
            'user_id' => Auth::user()
        ]);
        return new Response($givetem, 201);
    }

    /**
     * Update a specific givetem resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Givetem  $givetem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Givetem $givetem)
    {
        $updatedGivetem = $givetem->update($request->all());
        return new Response($updatedGivetem, 200);
    }

    /**
     * Remove a specific givetem
     *
     * @param  \App\Givetem  $givetem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Givetem $givetem)
    {
        if ($givetem->delete()) {
            return new Response('', 204);
        } else {
            return new Response(['msg' => 'unable to delete resource'], 500);
        }
    }
}
