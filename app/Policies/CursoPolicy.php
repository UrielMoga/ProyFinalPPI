<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Admin\Curso;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursoPolicy
{
    use HandlesAuthorization;

    public function usrins(User $user, Curso $curso){
        if($user->id == $curso->usrins){
            return true;
        }else{
            return false;
        }
    }
}

