<?php

namespace App\Observers;

use App\Models\MachineWorker;
use App\Models\MachineWorkerHistory;

class MachineWorkerObserver
{
    /**
     * Handle the MachineWorker "created" event.
     */
    public function created(MachineWorker $machineWorker): void
    {
        MachineWorkerHistory::query()->create([...$machineWorker->toArray()] + ['work_started_at' => now()]);
    }

    /**
     * Handle the MachineWorker "deleted" event.
     */
    public function deleted(MachineWorker $machineWorker): void
    {
        MachineWorkerHistory::query()
            ->where('machine_id', $machineWorker->machine_id)
            ->where('worker_id', $machineWorker->worker_id)
            ->whereNull('work_ended_at')
            ->update(['work_ended_at' => now()]);
    }
}
