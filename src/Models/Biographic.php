<?php

namespace Unixar\Models;

use App\Models\Scopes\ProfileScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ScopedBy(ProfileScope::class)]
class Biographic extends Model
{
    use HasFactory;

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class);
    }
}
