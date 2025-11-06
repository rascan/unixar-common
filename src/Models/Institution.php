<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    public function colleges(): HasMany
    {
        return $this->hasMany(College::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }

    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }
}
