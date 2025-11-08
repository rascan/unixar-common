<?php

namespace Unixar\Models\Scopes\Traits;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

trait DigitalFileTrait
{
    #[Scope]
    protected function educational(Builder $query)
    {
        $query->whereHas('digitalFileType', function ($query) {
            $query->whereIn('name', [
                'certificate',
            ]);
        });
    }

    #[Scope]
    protected function identification(Builder $query)
    {
        $query->whereHas('digitalFileType', function ($query) {
            $query->identification();
        });
    }

    #[Scope]
    protected function ofType(Builder $query, string $type)
    {
        $query->whereRelation('digitalFileType', 'digital_file_types.name', $type);
    }
}
