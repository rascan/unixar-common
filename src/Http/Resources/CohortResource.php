<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CohortResource extends JsonResource
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
            'display_name' => $this->when(
                $this->whenLoaded('academicLevel') && $this->whenLoaded('academicTerm'),
                fn () => $this->academicLevel->name.' '.$this->academicTerm->name,
            ),
            'program' => ProgramResource::make($this->whenLoaded('program')),
            'semester' => SemesterResource::make($this->whenLoaded('semester')),
            'academic_level' => AcademicLevelResource::make($this->whenLoaded('academicLevel')),
            'academic_term' => AcademicTermResource::make($this->whenLoaded('academicTerm')),
        ];
    }
}
