<?php

namespace Unixar\Models;

use App\Models\Scopes\ProfileScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ScopedBy([ProfileScope::class])]
class StudentApplication extends Model
{
    protected $casts = [
        'applied_at' => 'date',
        'evaluated_at' => 'date',
    ];

    public function intake(): BelongsTo
    {
        return $this->belongsTo(Intake::class);
    }

    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
}
