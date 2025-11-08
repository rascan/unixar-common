<?php

namespace Unixar\Models;

use App\Models\Scopes\ProfileScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

#[ScopedBy(ProfileScope::class)]
class Education extends Model
{
    public function academicTitle(): HasOneThrough
    {
        return $this->hasOneThrough(AcademicTitle::class, AcademicQualification::class, 'id', 'id', 'academic_qualification_id', 'academic_title_id');
    }

    public function academicQualification(): BelongsTo
    {
        return $this->belongsTo(AcademicQualification::class);
    }

    public function certificate(): BelongsTo
    {
        return $this->belongsTo(DigitalFile::class, 'digital_file_id', 'id');
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
