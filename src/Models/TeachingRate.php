<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeachingRate extends Model
{
    public function academicTitle(): BelongsTo
    {
        return $this->belongsTo(AcademicTitle::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
