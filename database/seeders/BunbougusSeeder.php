<?php

namespace Database\Seeders;

use App\Models\Bunbougu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BunbougusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunbougu::factory()->count(10)->create();
    }
}
