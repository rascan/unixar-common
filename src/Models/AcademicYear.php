<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicYear extends Model
{
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function semesters(): HasMany
    {
        return $this->hasMany(Semester::class);
    }
}
