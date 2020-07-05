<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Http\Request;

use Socialite;

class AuthController extends Controller
{


    public function __construct()
    {
    }


    public function SocialSignup(SocialAccountService $service, Request $request)
    {
        $user = Socialite::driver($request->provider)->stateless()->user();

        return response()->json($user);
    }

    public function index()
    {
        return view('welcome');
    }
}
