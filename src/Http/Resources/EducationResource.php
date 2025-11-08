<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'certificate' => DigitalFileResource::make($this->whenLoaded('certificate')),
            'academic_qualification' => AcademicQualificationResource::make($this->whenLoaded('academicQualification')),
        ];
    }
}
