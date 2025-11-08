<?php

namespace Unixar\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\HasRolesAndPermissions;
use Unixar\Database\Factories\UserFactory;

#[UseFactory(UserFactory::class)]
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasRolesAndPermissions, Notifiable;
    // use HasApiTokens, , UserTrait;

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
