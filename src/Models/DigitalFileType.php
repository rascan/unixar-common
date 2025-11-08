<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DigitalFileType extends Model
{
    #[Scope]
    protected function isId(Builder $query)
    {
        $query->whereIn('name', [
            'national-identification-card',
            'drivers-license',
            'passport',
        ]);
    }
}
