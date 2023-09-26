<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int $machine_id
 * @property int $worker_id
 */
class MachineWorker extends Pivot
{
    public $timestamps = false;
    protected $fillable = [
        'machine_id',
        'worker_id',
    ];

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function machine(): BelongsTo
    {
        return $this->belongsTo(Machine::class);
    }
}
