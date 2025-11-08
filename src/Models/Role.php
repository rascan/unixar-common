<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laratrust\Models\Role as RoleModel;

class Role extends RoleModel
{
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
