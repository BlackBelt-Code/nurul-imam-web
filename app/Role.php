<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use App\User;
use App\RoleUser;
class Role extends LaratrustRole
{
    public $guarded = [];

    public function roleuser()
    {
        return $this->hasMany(RoleUser::class);
    }

}