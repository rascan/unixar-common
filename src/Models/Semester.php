<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Semester extends Model
{
    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
