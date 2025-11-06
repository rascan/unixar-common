<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venue extends Model
{
    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }
}
