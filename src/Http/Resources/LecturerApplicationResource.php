<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LecturerApplicationResource extends JsonResource
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
            'applied_at' => $this->applied_at->format('F jS, Y'),
            'evaluated_at' => $this->evaluated_at?->format('F jS, Y'),
            'division' => DivisionResource::make($this->whenLoaded('division')),
        ];
    }
}
