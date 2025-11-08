<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'name' => $this->name,
            'details' => $this->details,
            'thumbnail' => '/images/thumbnails/'.rand(1, 32).'.png',
            'institution' => InstitutionResource::make($this->whenLoaded('institution')),
            // 'course_units' => CourseUnitResource::collection($this->whenLoaded('courseUnits')),
            'academic_title' => AcademicTitleResource::make($this->whenLoaded('academicTitle')),
            // 'student_application' => StudentApplicationResource::make($this->whenLoaded('studentApplication')),
        ];
    }
}
