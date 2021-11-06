<?php

namespace App\Policies;

use App\Models\Userss;
use App\Models\Clients;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the clients can view any models.
     *
     * @param  App\Models\Userss  $userss
     * @return mixed
     */
    public function viewAny(Userss $userss)
    {
        return $userss->hasPermissionTo('list allclients');
    }

    /**
     * Determine whether the clients can view the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function view(Userss $userss, Clients $model)
    {
        return $userss->hasPermissionTo('view allclients');
    }

    /**
     * Determine whether the clients can create models.
     *
     * @param  App\Models\Userss  $userss
     * @return mixed
     */
    public function create(Userss $userss)
    {
        return $userss->hasPermissionTo('create allclients');
    }

    /**
     * Determine whether the clients can update the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function update(Userss $userss, Clients $model)
    {
        return $userss->hasPermissionTo('update allclients');
    }

    /**
     * Determine whether the clients can delete the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function delete(Userss $userss, Clients $model)
    {
        return $userss->hasPermissionTo('delete allclients');
    }

    /**
     * Determine whether the userss can delete multiple instances of the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function deleteAny(Userss $userss)
    {
        return $userss->hasPermissionTo('delete allclients');
    }

    /**
     * Determine whether the clients can restore the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function restore(Userss $userss, Clients $model)
    {
        return false;
    }

    /**
     * Determine whether the clients can permanently delete the model.
     *
     * @param  App\Models\Userss  $userss
     * @param  App\Models\Clients  $model
     * @return mixed
     */
    public function forceDelete(Userss $userss, Clients $model)
    {
        return false;
    }
}
