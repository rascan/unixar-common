<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ProgramGroup extends Model
{
    public function allocations(): HasMany
    {
        return $this->hasMany(Allocation::class);
    }

    public function cohort(): BelongsTo
    {
        return $this->belongsTo(Cohort::class);
    }

    public function course(): HasOneThrough
    {
        return $this->hasOneThrough(Course::class, Program::class, 'id', 'id', 'program_id', 'course_id');
    }

    public function department(): HasOneThrough
    {
        return $this->hasOneThrough(Department::class, Program::class, 'id', 'id', 'program_id', 'department_id');
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
