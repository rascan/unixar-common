<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicTitle extends Model
{
    public function academicQualifications(): HasMany
    {
        return $this->hasMany(AcademicQualification::class);
    }

    public function admissionFees(): HasMany
    {
        return $this->hasMany(AdmissionFee::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function teachingRates(): HasMany
    {
        return $this->hasMany(TeachingRate::class);
    }
}
