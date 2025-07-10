<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StudentSeeder; // ✅ Make sure this is added

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            StudentSeeder::class, // ✅ This line is correct
        ]);
    }
}
