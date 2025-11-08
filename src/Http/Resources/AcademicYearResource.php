<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcademicYearResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $commencingAt = $this->commencing_at->format('M Y');
        $concludingAt = $this->concluding_at->format('M Y');

        return [
            'id' => (int) $this->id,
            'name' => "{$commencingAt} - {$concludingAt}",
            'commencing_at' => $this->commencing_at->format('Y-m-d'),
            'concluding_at' => $this->concluding_at->format('Y-m-d'),
            'starting_date' => $this->commencing_at->format('d F Y'),
            'ending_date' => $this->concluding_at->format('d F Y'),
        ];
    }
}
