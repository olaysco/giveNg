<?php

namespace App\Policies;

use App\Givetem;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GivetemPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Givetem $givetem)
    {
        return $user->id == $givetem->user_id;
    }

    public function delete(User $user, Givetem $givetem)
    {
        return $user->id == $givetem->user_id;
    }
}
