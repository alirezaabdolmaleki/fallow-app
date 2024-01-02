<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserRepository
{
    public function createUser($data)
    {
        return User::create($data);
    }

}
