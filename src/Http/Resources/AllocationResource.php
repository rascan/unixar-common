<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllocationResource extends JsonResource
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
            'revoked_at' => $this->revoked_at,
            'is_normal_load' => (bool) $this->is_normal_load,
            'stream' => StreamResource::make($this->whenLoaded('stream')),
            'course_unit' => CourseUnitResource::make($this->whenLoaded('courseUnit')),
        ];
    }
}
