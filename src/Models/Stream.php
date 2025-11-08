<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stream extends Model
{
    public function cohort(): BelongsTo
    {
        return $this->belongsTo(Cohort::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
