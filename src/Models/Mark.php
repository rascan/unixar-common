<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mark extends Model
{
    public function examination(): BelongsTo
    {
        return $this->belongsTo(Examination::class);
    }

    public function gradingSystem(): BelongsTo
    {
        return $this->belongsTo(GradingSystem::class);
    }
}
