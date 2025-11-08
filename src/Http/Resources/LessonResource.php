<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
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
            'uuid' => $this->uuid,
            'day' => $this->happened_at->day,
            'happened_at' => $this->happened_at->format('Y-m-d'),
            'unit' => UnitResource::make($this->whenLoaded('unit')),
            'course' => UnitResource::make($this->whenLoaded('course')),
            'stream' => StreamResource::make($this->whenLoaded('stream')),
            'lecturer' => StaffResource::make($this->whenLoaded('lecturer')),
            'schedule' => ScheduleResource::make($this->whenLoaded('schedule')),
        ];
    }
}
