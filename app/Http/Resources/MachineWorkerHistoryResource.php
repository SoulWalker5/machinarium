<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\MachineWorkerHistory
 */
class MachineWorkerHistoryResource extends JsonResource
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
            'workStartedAt' => $this->work_started_at,
            'workEndedAt' => $this->work_ended_at,
            'machine' => MachineResource::make($this->whenLoaded('machine')),
            'worker' => WorkerResource::make($this->whenLoaded('worker')),
        ];
    }
}
