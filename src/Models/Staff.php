<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Unixar\Models\Traits\StaffTrait;

class Staff extends Model
{
    use StaffTrait;

    public function primaryDivision(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'primary_division_id');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function staffLevel(): BelongsTo
    {
        return $this->belongsTo(StaffLevel::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
