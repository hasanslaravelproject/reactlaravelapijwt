<?php

namespace App\Policies;

use App\Models\Userss;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserssPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the userss can view any models.
     *
     * @param  App\Models\Userss  $userss
     * @return mixed
     */
    public function viewAny(Userss $userss)
    {
        return $userss->hasPermissionTo('list usersses');
    }

    /**
     * Determine whether the userss can view the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function view(Userss $userss, Userss $model)
    {
        return $userss->hasPermissionTo('view usersses');
    }

    /**
     * Determine whether the userss can create models.
     *
     * @param  App\Models\Userss  $userss
     * @return mixed
     */
    public function create(Userss $userss)
    {
        return $userss->hasPermissionTo('create usersses');
    }

    /**
     * Determine whether the userss can update the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function update(Userss $userss, Userss $model)
    {
        return $userss->hasPermissionTo('update usersses');
    }

    /**
     * Determine whether the userss can delete the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function delete(Userss $userss, Userss $model)
    {
        return $userss->hasPermissionTo('delete usersses');
    }

    /**
     * Determine whether the userss can delete multiple instances of the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function deleteAny(Userss $userss)
    {
        return $userss->hasPermissionTo('delete usersses');
    }

    /**
     * Determine whether the userss can restore the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function restore(Userss $userss, Userss $model)
    {
        return false;
    }

    /**
     * Determine whether the userss can permanently delete the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Userss  $model
     * @return mixed
     */
    public function forceDelete(Userss $userss, Userss $model)
    {
        return false;
    }
}
