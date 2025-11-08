<?php

namespace Unixar\Models\Traits;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    #[Scope]
    protected function search(Builder $query, $searchTerm = '', $column = 'name'): void
    {
        $query->when($searchTerm, function ($query, $searchTerm) use ($column) {
            $query->where($column, 'like', "%{$searchTerm}%");
        });
    }
}
