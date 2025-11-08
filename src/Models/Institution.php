<?php

namespace Unixar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    public function academicYears(): HasMany
    {
        return $this->hasMany(AcademicYear::class);
    }

    public function admissionFees(): HasMany
    {
        return $this->hasMany(AdmissionFee::class);
    }

    public function colleges(): HasMany
    {
        return $this->hasMany(College::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }

    public function gradingSystems(): HasMany
    {
        return $this->hasMany(GradingSystem::class);
    }

    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }

    public function semesters(): HasMany
    {
        return $this->hasMany(Semester::class);
    }

    public function staffLevels(): HasMany
    {
        return $this->hasMany(StaffLevel::class);
    }

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
