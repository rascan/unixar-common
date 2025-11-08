<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExaminationResource extends JsonResource
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
            'marks' => MarkResource::make($this->whenLoaded('marks')),
            'examination_type' => ExaminationTypeResource::make($this->whenLoaded('examinationType')),
        ];
    }
}
