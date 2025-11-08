<?php

namespace Unixar\Models\Scopes;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

class InstitutionScope
{
    // #[Scope]
    // protected function biddable(Builder $query): void
    // {
    //     $query->whereHas('divisions', function ($query) {
    //         $query->biddable();
    //     });
    // }

    // #[Scope]
    // protected function employee(Builder $query): void
    // {
    //     $query->whereRelation('divisions.staff.user', 'profile_id', Auth::user()->profile_id);
    // }

    /**
     * Institutions where the authenticated user is a student or has studied
     */
    #[Scope]
    protected function studied(Builder $query): void
    {
        $query->whereRelation('students', 'profile_id', profile('id'));
    }

    // #[Scope]
    // protected function teaching(Builder $query): void
    // {
    //     $query->employee()->whereHas('campuses', function ($query) {
    //         $query->teaching();
    //     });
    // }
}
