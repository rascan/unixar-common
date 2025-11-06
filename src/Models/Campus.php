<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campus extends Model
{
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function venues(): HasMany
    {
        return $this->hasMany(Venue::class);
    }
}
