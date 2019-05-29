<?php

namespace App\Policies;

use App\User;
use App\Club;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClubPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }

    public function create(User $user)
    {
        return false;
    }
    
    public function update(User $user, Club $club)
    {
        if ($user->role == "club_admin" && $club->id == $user->club_id) {
            return true;
        }
        return false;
    }

    public function delete(User $user, Club $club)
    {
        return false;
    }

}
