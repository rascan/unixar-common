<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'avatar' => $this->avatar,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'family_name' => $this->family_name,
            'name' => "{$this->first_name} {$this->family_name}",
            'full_name' => "{$this->first_name} {$this->middle_name} {$this->family_name}",
            'country' => CountryResource::make($this->whenLoaded('country')),
            'honorific' => HonorificResource::make($this->whenLoaded('honorific')),
            'education' => EducationResource::collection($this->whenLoaded('education')),
        ];
    }
}
