<?php

namespace App\Policies;

use App\Models\Release;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReleasePolicy
{
    use HandlesAuthorization;


    //lo que hace esto es para que los usuarios no se metan en los demas post de otros usuarios creados

    public function author(User $user, Release $release)
    {
        if ($user->id == $release->user_id) {
            return true;
        } else {
            return false;
        }
    }



    public function published(?User $user, Release $release)
    {
        if ($release->status == 2) {
            return true;
        } else {
            return false;
        }
    }
}
