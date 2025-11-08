<?php

namespace Unixar\Models;

use App\Models\Scopes\LessonScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

#[ScopedBy(LessonScope::class)]
class Lesson extends Model
{
    use SoftDeletes;

    protected $casts = [
        'happened_at' => 'date',
    ];

    #[Scope]
    protected function attending(Builder $query)
    {
        $query->where(fn ($query) => $query->teaching())
            ->orWhere(fn ($query) => $query->learning());
    }

    #[Scope]
    protected function learning(Builder $query)
    {
        $query->whereHas('stream.students.user', function ($query) {
            $query->where('profile_id', Auth::user()->profile_id);
        });
    }

    #[Scope]
    protected function month(Builder $query, Carbon $date)
    {
        $query->whereBetween('happened_at', [
            $date?->startOfMonth() ?? now()->startOfMonth(),
            $date?->endOfMonth() ?? now()->endOfMonth(),
        ]);
    }

    #[Scope]
    protected function teaching(Builder $query)
    {
        $query->whereHas('allocation.lecturer.user', function ($query) {
            $query->where('profile_id', Auth::user()->profile_id);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    public function allocation(): BelongsTo
    {
        return $this->belongsTo(Allocation::class);
    }

    public function cohort(): BelongsTo
    {
        return $this->belongsTo(Cohort::class);
    }

    public function course(): HasOneThrough
    {
        return $this->hasOneThrough(Course::class, CourseUnit::class, 'id', 'id', 'course_unit_id', 'course_id');
    }

    public function programGroup(): BelongsTo
    {
        return $this->belongsTo(ProgramGroup::class);
    }

    public function courseUnit(): BelongsTo
    {
        return $this->belongsTo(CourseUnit::class);
    }

    public function lecturer(): HasOneThrough
    {
        return $this->hasOneThrough(Staff::class, Allocation::class, 'id', 'id', 'allocation_id', 'lecturer_id');
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function stream(): BelongsTo
    {
        return $this->belongsTo(Stream::class, 'stream_id');
    }

    public function unit(): HasOneThrough
    {
        return $this->hasOneThrough(Unit::class, CourseUnit::class, 'id', 'id', 'course_unit_id', 'unit_id');
    }
}
