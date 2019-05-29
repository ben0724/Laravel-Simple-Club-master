<?php

namespace App\Policies;

use App\User;
use App\ExcelFile;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExcelFilePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }
    
    public function upload(User $user)
    {
        return false;
    }

    public function download(User $user, ExcelFile $excel_file)
    {
        return false;
    }

    public function delete(User $user, ExcelFile $excel_file)
    {
        return false;
    }

}
