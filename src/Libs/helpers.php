<?php

use Illuminate\Support\Facades\Auth;
use Unixar\Models\Profile;
use Unixar\Models\User;

if (function_exists('profile')) {
    function profile(?string $id = null): int | Profile {
        $user = User::with(['profile'])->findOrFail(Auth::id());
        return $id ? $user->profile_id : $user->profile;
    }
}
