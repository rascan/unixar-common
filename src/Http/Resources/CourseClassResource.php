<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseClassResource extends JsonResource
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
            'cohort' => CohortResource::make($this->whenLoaded('cohort')),
            'department' => DepartmentResource::make($this->whenLoaded('department')),
            'course_unit' => CourseUnitResource::make($this->whenLoaded('courseUnit')),
        ];
    }
}
