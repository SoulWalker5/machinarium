<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

/**
 * @property int $id
 * @property int $number
 */
class Machine extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    public function machineWorker(): HasOne
    {
        return $this->hasOne(MachineWorker::class);
    }

    public function worker(): HasOneThrough
    {
        return $this->hasOneThrough(
            Worker::class,
            MachineWorker::class,
            'machine_id',
            'id',
            secondLocalKey: 'worker_id'
        );
    }
}
