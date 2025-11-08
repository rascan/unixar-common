<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'registration_number' => $this->registration_number,
            'admitted_at' => $this->created_at?->format('M jS, Y'),
            'completed_at' => $this->completed_at?->format('M jS, Y'),
            'graduated_at' => $this->graduated_at?->format('M jS, Y'),
            'user' => UserResource::make($this->whenLoaded('user')),
            'examinations' => ExaminationResource::collection($this->whenLoaded('examinations')),
            'student_application' => StudentApplicationResource::make($this->whenLoaded('studentApplication')),
            'current_stream' => $this->whenLoaded('streams', function () {
                $currentStream = $this->streams()->wherePivot('departed_at', null)->first();
                return $currentStream ? StreamResource::make($currentStream) : null;
            }),
        ];
    }
}
