<?php

namespace App\Http\Controllers;

use App\Givetem;
use App\Http\Requests\GivetemStoreRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use JD\Cloudder\Facades\Cloudder;

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
     * @param  GivetemStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GivetemStoreRequest $request)
    {
        $url = $request->image["url"] ?? null;
        $givetem = null;
        try {
            if (is_null($url)) $url = $this->storeImage($request);
            $givetem = Givetem::create([
                "title" => $request->title,
                "image_url" => $url,
                "caption" => $request->caption,
                "rating" => $request->rating,
                "pickup_location" => $request->pickup_location,
                "info" => $request->info,
                "tags" => $request->tags,
                "user_id" => Auth::user()->id
            ]);
        } catch (Exception $e) {
            return new Response($e, 500);
        }
        return new Response($givetem, 201);
    }

    /**
     * Stores the givetem image object
     * in storage and returns its url
     *
     * @param GivetemStoreRequest $request
     * @return string
     */
    public function storeImage(GivetemStoreRequest $request): string
    {
        Cloudder::upload($request->image["data"], null, [], "givetem");
        $result = Cloudder::getResult();
        return $result["secure_url"];
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
