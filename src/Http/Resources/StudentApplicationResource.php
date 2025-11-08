<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentApplicationResource extends JsonResource
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
            'status' => $this->status,
            'period' => $this->period,
            'applied_at' => $this->applied_at->format('Y-m-d'),
            'applied_at_display' => $this->applied_at->format('F jS, Y'),
            'evaluated_at' => $this->evaluated_at?->format('Y-m-d'),
            'evaluated_at_display' => $this->evaluated_at?->format('F jS, Y'),
            'intake' => IntakeResource::make($this->whenLoaded('intake')),
            'student' => StudentResource::make($this->whenLoaded('student')),
        ];
    }
}
