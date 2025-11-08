<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SemesterResource extends JsonResource
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
            'commencing_at' => $this->commencing_at->format('Y-m-d'),
            'concluding_at' => $this->concluding_at->format('Y-m-d'),
            'is_bidding_open' => ! $this->bidding_expired_at?->isPast(),
            'unit_bidding_expiring_at' => $this->unit_bidding_expiring_at?->format('Y-m-d'),
            'registration_expiring_at' => $this->registration_expiring_at?->format('Y-m-d'),

            'display_name' => $this->commencing_at->format('F jS, Y').' - '.$this->concluding_at->format('F jS, Y'),
            'display_name_short' => $this->commencing_at->format('M Y').' - '.$this->concluding_at->format('M Y'),
            'display_name_month' => $this->commencing_at->format('F Y').' - '.$this->concluding_at->format('F Y'),

            'unit_bidding_expiring_at_display' => $this->unit_bidding_expiring_at?->format('F jS, Y'),
            'registration_expiring_at_display' => $this->registration_expiring_at?->format('F jS, Y'),
        ];
    }
}
