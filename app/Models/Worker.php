<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 */
class Worker extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function machines(): BelongsToMany
    {
        return $this->belongsToMany(Machine::class, MachineWorker::class);
    }

    public function machineWorker(): HasMany
    {
        return $this->hasMany(MachineWorker::class);
    }
}
