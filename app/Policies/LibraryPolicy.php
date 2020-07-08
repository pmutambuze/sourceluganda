<?php

namespace App\Policies;

use App\Library;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibraryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function update(User $user, Library $library)
    {
        return $library->owner->id == $user->id &&
               $library->approved == false ||
               $user->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function delete(User $user, Library $library)
    {
        return $library->owner->id == $user->id  ||
               $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function restore(User $user, Library $library)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function forceDelete(User $user, Library $library)
    {
        return $user->is_admin;
    }
}
