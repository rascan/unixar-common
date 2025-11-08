<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseUnitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'course_id' => $this->course_id,
            'unit' => UnitResource::make($this->whenLoaded('unit')),
            'course' => CourseResource::make($this->whenLoaded('course')),
            'course_option' => CourseOptionResource::make($this->whenLoaded('courseOption')),
            'academic_term' => AcademicTermResource::make($this->whenLoaded('academicTerm')),
            'academic_level' => AcademicLevelResource::make($this->whenLoaded('academicLevel')),
        ];
    }
}
