<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// #[ScopedBy(ProfileScope::class)]
class LecturerApplication extends Model
{
    protected $casts = [
        'applied_at' => 'date',
        'evaluated_at' => 'date',
    ];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
