<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
