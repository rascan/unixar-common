<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DigitalFile extends Model
{
    public function academicQualification(): BelongsTo
    {
        return $this->belongsTo(AcademicQualification::class);
    }

    public function digitalFileType(): BelongsTo
    {
        return $this->belongsTo(DigitalFileType::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
