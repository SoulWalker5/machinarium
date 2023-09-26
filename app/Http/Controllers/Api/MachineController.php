<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MachineResource;
use App\Models\Machine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return MachineResource::collection(Machine::get());
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine): JsonResource
    {
        return new MachineResource($machine->load('worker'));
    }
}
