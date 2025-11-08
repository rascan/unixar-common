<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'profile_id' => $this->profile_id,
            'staff' => StaffResource::make($this->whenLoaded('staff')),
            'student' => StudentResource::make($this->whenLoaded('student')),
            'profile' => ProfileResource::make($this->whenLoaded('profile')),
        ];
    }
}
