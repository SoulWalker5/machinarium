<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return WorkerResource::collection(Worker::get());
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker): JsonResource
    {
        return new WorkerResource($worker->load('machines'));
    }
}
