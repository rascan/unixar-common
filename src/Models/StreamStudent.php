<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class StreamStudent extends Pivot
{
    protected $casts = [
        'enrolled_at' => 'date',
        'departed_at' => 'date',
    ];
}
