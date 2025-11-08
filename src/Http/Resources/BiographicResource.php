<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BiographicResource extends JsonResource
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
            'date_of_birth' => $this->date_of_birth->format('Y-m-d'),
            'dob_formatted' => $this->date_of_birth->format('F jS, Y'),
            'gender' => GenderResource::make($this->whenLoaded('gender')),
            'religion' => ReligionResource::make($this->whenLoaded('religion')),
            'marital_status' => MaritalStatusResource::make($this->whenLoaded('maritalStatus')),
        ];
    }
}
