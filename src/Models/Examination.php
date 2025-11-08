<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Examination extends Model
{
    public function examinationType(): BelongsTo
    {
        return $this->belongsTo(ExaminationType::class);
    }

    public function marks(): HasOne
    {
        return $this->hasOne(Mark::class);
    }
}
