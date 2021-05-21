<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthPolicy
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
    public function allow(User $user)
    {
        return $user->checkModerator()!=null;
    }
    public function emailVerified(User $user){
        return $user->email_verified_at != null;
    }
}
