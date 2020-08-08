<?php

namespace App\Http\Controllers;

use Facades\App\Contracts\GivetemRepositoryInterface as GivetemRepo;
use App\Givetem;
use App\Http\Requests\GivetemStoreRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

class GivetemController extends Controller
{
    private $givetemRepo;

    public function __construct()
    {;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Collection
    {
        return GivetemRepo::all();
    }

    /**
     * Get a single givetem resource
     * by ID
     */
    public function single(Givetem $givetem)
    {
        return $givetem;
    }

    /**
     * Store a newly created givetem in db.
     *
     * @param  GivetemStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GivetemStoreRequest $request): Response
    {
        $url = $request->image["url"] ?? null;
        $givetem = null;
        try {
            if (is_null($url)) $url = $this->storeImage($request);
            $givetem = GivetemRepo::create([
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
    public function update(Request $request, Givetem $givetem): Response
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
    public function destroy(Givetem $givetem): Response
    {
        if ($givetem->delete()) {
            return new Response('', 204);
        } else {
            return new Response(['msg' => 'unable to delete resource'], 500);
        }
    }

    /**
     * Retrieves givetems created by authenticated user
     *
     * @return \Illuminate\Http\Response
     */
    public function userGivetem(): Response
    {
        $givetems = Givetem::where('user_id', Auth::user()->id)->get();
        return new Response(
            $givetems,
            202
        );
    }
}
