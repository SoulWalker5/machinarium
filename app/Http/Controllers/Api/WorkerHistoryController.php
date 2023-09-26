<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MachineWorkerHistoryResource;
use App\Models\Worker;

class WorkerHistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Worker $worker)
    {
        return MachineWorkerHistoryResource::collection($worker->history()->ended()->with('machine')->paginate());
    }
}
