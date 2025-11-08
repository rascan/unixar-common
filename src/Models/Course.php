<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    public function academicTitle(): BelongsTo
    {
        return $this->belongsTo(AcademicTitle::class);
    }

    public function cohorts(): HasManyThrough
    {
        return $this->hasManyThrough(Cohort::class, Program::class, 'id', 'program_id', 'id', 'id');
    }

    public function courseOptions(): HasMany
    {
        return $this->hasMany(CourseOption::class);
    }

    public function courseUnits(): HasMany
    {
        return $this->hasMany(CourseUnit::class);
    }

    public function divisions(): BelongsToMany
    {
        return $this->belongsToMany(Division::class, 'programs');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
