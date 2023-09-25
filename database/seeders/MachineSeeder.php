<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::factory()->createMany([
            ['number' => 44],
            ['number' => 56],
            ['number' => 23],
            ['number' => 78],
            ['number' => 102],
        ]);
    }
}
