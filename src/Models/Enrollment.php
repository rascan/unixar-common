<?php

namespace Unixar\Models;

use App\Unixar\Traits\EnrollmentTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends Model
{
    // use EnrollmentTrait;

    public function courseUnit(): BelongsTo
    {
        return $this->belongsTo(CourseUnit::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
