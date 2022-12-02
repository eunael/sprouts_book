<?php

namespace App\Policies;

use App\Models\Sprout;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SproutPolicy
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
     * @param  \App\Models\Sprout  $sprout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Sprout $sprout)
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
     * @param  \App\Models\Sprout  $sprout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Sprout $sprout)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sprout  $sprout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Sprout $sprout)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sprout  $sprout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Sprout $sprout)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sprout  $sprout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Sprout $sprout)
    {
        //
    }
}