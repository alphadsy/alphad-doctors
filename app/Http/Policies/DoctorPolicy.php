<?php

namespace App\Policies;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return ! $user->isDoctor();
    }

    public function update(User $user, Doctor $doctor)
    {
        return  $user->id == $doctor->user_id;
    }
}
