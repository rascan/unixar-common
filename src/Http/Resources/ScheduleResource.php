<?php

namespace Unixar\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $startTime = Carbon::createFromFormat('H:i:s', $this->start_time)->format('g:i A');
        $endTime = Carbon::createFromFormat('H:i:s', $this->end_time)->format('g:i A');

        return [
            'id' => $this->id,
            'day_of_week' => $this->day_of_week,
            'period' => "{$startTime} - {$endTime}",
            'start_time' => $startTime,
            'venue' => VenueResource::make($this->whenLoaded('venue')),
            'cohort' => CohortResource::make($this->whenLoaded('cohort')),
            'course_unit' => CourseUnitResource::make($this->whenLoaded('courseUnit')),
        ];
    }
}
