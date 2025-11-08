<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IntakeResource extends JsonResource
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
            'has_evening_classes' => (bool) $this->has_evening_classes,
            'display_name' => $this->cohort?->semester?->commencing_at->format('F Y'),
            'cohort' => CohortResource::make($this->whenLoaded('cohort')),
        ];
    }
}
