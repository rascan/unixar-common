<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Unixar\Models\Traits\StudentTrait;

class Student extends Model
{
    use StudentTrait;

    protected $casts = [
        'completed_at' => 'date',
        'graduated_at' => 'date',
    ];

    public function examinations(): HasMany
    {
        return $this->hasMany(Examination::class);
    }

    public function streams(): BelongsToMany
    {
        return $this->belongsToMany(Stream::class)
            ->using(StreamStudent::class)
            ->withPivot(['enrolled_at', 'departed_at']);
    }

    public function studentApplication(): BelongsTo
    {
        return $this->belongsTo(StudentApplication::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
