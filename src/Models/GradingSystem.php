<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GradingSystem extends Model
{
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }
}
