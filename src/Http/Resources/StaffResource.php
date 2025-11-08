<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
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
            'user_id' => $this->user_id,
            'staff_number' => $this->staff_number,
            'user' => UserResource::make($this->whenLoaded('user')),
            'department' => DepartmentResource::make($this->whenLoaded('department')),
        ];
    }
}
