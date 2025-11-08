<?php

namespace Unixar\Models;

use App\Models\Scopes\ProfileScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ScopedBy(ProfileScope::class)]
class Bid extends Model
{
    public function courseUnit(): BelongsTo
    {
        return $this->belongsTo(CourseUnit::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
}
