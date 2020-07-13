<?php

namespace App\Http\Controllers;

use App\Givetem;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
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
