<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AcademicQualification extends Model
{
    public function academicTitle(): BelongsTo
    {
        return $this->belongsTo(AcademicTitle::class);
    }
}
