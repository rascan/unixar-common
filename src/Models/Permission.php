<?php

namespace Unixar\Models;

use Laratrust\Models\Permission as PermissionModel;

class Permission extends PermissionModel
{
    protected static function booted(): void
    {
        static::created(function (Permission $permission) {
            $roles = Role::whereIn('name', ['administrator'])->get();
            $roles->each(fn ($role) => $role->givePermission($permission));
        });
    }
}
