<?php

namespace Database\Seeders;

use App\Models\Difficulty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = json_decode(file_get_contents('database/data/difficulties.json'), true);
        foreach ($content as $difficulties) {
            Difficulty::create($difficulties);
        }
    }
}
