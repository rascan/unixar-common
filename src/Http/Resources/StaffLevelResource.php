<?php

namespace Unixar\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StaffLevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (int) $this->id,
            'name' => $this->name,
            'display_name' => $this->display_name,
            'part_time_load' => $this->part_time_load,
            'full_time_load' => $this->full_time_load,
        ];
    }
}
