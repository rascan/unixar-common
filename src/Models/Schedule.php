<?php

namespace Unixar\Models;

use App\Http\Resources\SemesterResource;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    #[Scope]
    protected function inSemester(Builder $query, Semester|SemesterResource $semester)
    {
        $query->whereRelation('programGroup.cohort', 'semester_id', $semester->id);
    }

    public function allocation(): HasOne
    {
        return $this->hasOne(Allocation::class, 'course_class_id', 'course_class_id')
            ->where('status', '!=', 'rejected')
            ->whereNull('revoked_at');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'cohort_id', 'cohort_id');
    }

    public function lecturer()
    {
        return $this->hasOneThrough(User::class, Allocation::class, 'course_class_id', 'id', 'course_class_id', 'lecturer_id')
            ->where('allocations.status', '!=', 'rejected')
            ->whereNull('allocations.revoked_at');
    }

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }
}
