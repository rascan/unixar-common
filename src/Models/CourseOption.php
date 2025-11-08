<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CourseOption extends Model
{
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
