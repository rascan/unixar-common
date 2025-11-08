<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MarkResource extends JsonResource
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
            'cat_mark' => $this->cat_mark,
            'internal_exam_mark' => $this->internal_exam_mark,
            'external_exam_mark' => $this->external_exam_mark,
            'percentage' => $this->percentage,
            'grading_system' => GradingSystemResource::make($this->whenLoaded('gradingSystem')),
        ];
    }
}
