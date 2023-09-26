<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MachineWorkerHistoryResource;
use App\Models\Machine;

class MachineHistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Machine $machine)
    {
        return MachineWorkerHistoryResource::collection($machine->history()->ended()->with('worker')->paginate());
    }
}
