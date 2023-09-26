<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $machine_id
 * @property int $worker_id
 * @property CarbonInterface $work_started_at
 * @property CarbonInterface $work_ended_at
 */
class MachineWorkerHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'machine_id',
        'worker_id',
        'work_started_at',
        'work_ended_at',
    ];

    protected $casts = [
        'work_started_at' => 'datetime',
        'work_ended_at' => 'datetime',
    ];

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function machine(): BelongsTo
    {
        return $this->belongsTo(Machine::class);
    }

    public function scopeEnded(Builder $query): Builder
    {
        return $query->whereNotNull('work_ended_at');
    }

    public function scopeStarted(Builder $query): Builder
    {
        return $query->whereNull('work_ended_at');
    }
}
