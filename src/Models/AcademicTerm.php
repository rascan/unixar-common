<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicTerm extends Model
{
    public function cohorts(): HasMany
    {
        return $this->hasMany(Cohort::class);
    }

    public function courseUnits(): HasMany
    {
        return $this->hasMany(CourseUnit::class);
    }
}
