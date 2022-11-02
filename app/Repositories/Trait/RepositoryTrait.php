<?php

namespace App\Repositories\Trait;

use App\Models\User;

trait RepositoryTrait{

    private function getUserAuth():User
    {

        return User::first();
    }

}


