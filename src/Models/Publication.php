<?php

namespace Unixar\Models;

use App\Models\Scopes\ProfileScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;

#[ScopedBy(ProfileScope::class)]
class Publication extends Model {}
