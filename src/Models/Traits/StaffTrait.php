<?php

namespace Unixar\Models\Traits;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

trait StaffTrait
{
    #[Scope]
    protected function me(Builder $query)
    {
        $query->where('profile_id', profile('id'));
    }
}
