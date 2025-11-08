<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnrollmentResource extends JsonResource
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
            'student' => StudentResource::make($this->whenLoaded('student')),
            'division' => DivisionResource::make($this->whenLoaded('division')),
            'course_unit' => CourseUnitResource::make($this->whenLoaded('courseUnit')),
        ];
    }
}
