<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DivisionResource extends JsonResource
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
            'campus' => CampusResource::make($this->whenLoaded('campus')),
            'department' => DepartmentResource::make($this->whenLoaded('department')),
            'institution' => InstitutionResource::make($this->whenLoaded('institution')),
        ];
    }
}
