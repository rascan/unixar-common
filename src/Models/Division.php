<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laratrust\Models\Team;

class Division extends Team
{
    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }

    public function college(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'programs')->withTimestamps();
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function lecturerApplications(): HasMany
    {
        return $this->hasMany(LecturerApplication::class);
    }

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class, 'primary_division_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user', 'division_id', 'user_id');
    }
}
