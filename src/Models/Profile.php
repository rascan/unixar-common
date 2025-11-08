<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function honorific(): BelongsTo
    {
        return $this->belongsTo(Honorific::class);
    }

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
