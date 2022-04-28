<?php

namespace App\Policies;

use App\Models\Bab;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BabPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Bab $bab)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Bab $bab)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Bab $bab)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Bab $bab)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Bab $bab)
    {
        //
    }
}
