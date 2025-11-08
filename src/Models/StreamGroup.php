<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StreamGroup extends Model
{
    public function streamOptions(): HasMany
    {
        return $this->hasMany(StreamOption::class);
    }
}
