<?php

namespace App\Traits;

use App\Models\User;

trait UserTrait
{


    public function getUserByToken($token)
    {
        return User::where('token', $token)->firstOrFail();
    }


}
