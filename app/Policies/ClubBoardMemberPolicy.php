<?php

namespace App\Policies;

use App\User;
use App\ClubBoardMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClubBoardMemberPolicy
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
        if ($user->role == "club_admin") {
            return true;
        }
        return false;
    }
    
    public function update(User $user, ClubBoardMember $member)
    {
        if ($user->role == "club_admin" && $member->club_id == $user->club_id) {
            return true;
        }
        return false;
    }

    public function delete(User $user, ClubBoardMember $member)
    {
        if ($user->role == "club_admin" && $member->club_id == $user->club_id) {
            return true;
        }
        return false;
    }
}
