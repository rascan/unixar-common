<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Division extends Model
{
    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }

    public function college(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
