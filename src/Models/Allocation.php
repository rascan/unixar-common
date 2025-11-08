<?php

namespace Unixar\Models;

use App\Models\Scopes\LecturerScope;
use App\Models\Traits\AllocationTrait;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

// #[ScopedBy(LecturerScope::class)]
class Allocation extends Model
{
    // use AllocationTrait, SoftDeletes;
    use SoftDeletes;

    public function courseUnit(): BelongsTo
    {
        return $this->belongsTo(CourseUnit::class);
    }

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'lecturer_id');
    }

    public function programGroup(): BelongsTo
    {
        return $this->belongsTo(ProgramGroup::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'course_class_id', 'course_class_id');
    }

    public function stream(): BelongsTo
    {
        return $this->belongsTo(Stream::class);
    }
}
