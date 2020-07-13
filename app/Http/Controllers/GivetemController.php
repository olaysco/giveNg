<?php

namespace App\Http\Controllers;

use App\Givetem;
use App\Http\Requests\GivetemStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GivetemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created givetem in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GivetemStoreRequest $request)
    {
        $givetem = Givetem::create($request->all());
        return new Response($givetem, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Givetem  $givetem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Givetem $givetem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Givetem  $givetem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Givetem $givetem)
    {
        //
    }
}
