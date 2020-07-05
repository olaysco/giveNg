<?php

namespace App\Services;

use App\SocialAccount;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $driver)
    {
        $account = SocialAccount::whereProvider($driver)
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $driver
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName() ?? $providerUser->getNickname(),
                    'password' => md5(rand(1, 10000)),
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}
