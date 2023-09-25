<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $number
 */
class Machine extends Model
{
    use HasFactory;

    protected $fillable = ['number'];
}
