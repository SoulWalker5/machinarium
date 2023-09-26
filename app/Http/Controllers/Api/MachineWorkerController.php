<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachMachineToWorkerRequest;
use App\Http\Requests\DetachMachineFromWorkerRequest;
use App\Models\Worker;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Throwable;

class MachineWorkerController extends Controller
{
    public function attach(AttachMachineToWorkerRequest $request, Worker $worker): JsonResponse
    {
        try {
            $worker->machines()->attach(['machine_id' => $request->validated('machineId')]);
        } catch (Throwable $e) {
            Log::error(self::class . ' ' . __FUNCTION__ . ' ' . $e->getMessage());

            return new JsonResponse(['message' => 'Something went wrong. Try contact admin for this matter.'], 400);
        }

        return new JsonResponse(['message' => 'Worker successfully attached to machine.']);
    }

    public function detach(DetachMachineFromWorkerRequest $request, Worker $worker): JsonResponse
    {
        try {
            $worker->machines()->detach(['machine_id' => $request->validated('machineId')]);
        } catch (Throwable $e) {
            Log::error(self::class . ' ' . __FUNCTION__ . ' ' . $e->getMessage());

            return new JsonResponse(['message' => 'Something went wrong. Try contact admin for this matter.'], 400);
        }

        return new JsonResponse(['message' => 'Worker successfully detached from machine.']);
    }
}
