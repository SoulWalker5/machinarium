<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return WorkerResource::collection(Worker::get());
    }
}
