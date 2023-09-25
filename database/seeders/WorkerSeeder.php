<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Worker::factory()->createMany([
            ['name' => 'Andriy'],
            ['name' => 'Serhiy'],
            ['name' => 'Michael'],
            ['name' => 'Stas'],
            ['name' => 'Artem'],
            ['name' => 'Tetyana'],
            ['name' => 'Eugene'],
            ['name' => 'Kate'],
            ['name' => 'Borys'],
        ]);
    }
}
