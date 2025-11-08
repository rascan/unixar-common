<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseUnit extends Model
{
    public function academicLevel(): BelongsTo
    {
        return $this->belongsTo(AcademicLevel::class);
    }

    public function academicTerm(): BelongsTo
    {
        return $this->belongsTo(AcademicLevel::class);
    }

    // public function allocations(): HasMany
    // {
    //     return $this->hasMany(Allocation::class);
    // }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function courseOption(): BelongsTo
    {
        return $this->belongsTo(CourseOption::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}
