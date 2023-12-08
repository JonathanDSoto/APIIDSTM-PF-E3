<?php

namespace Database\Seeders;

use App\Models\Nonogram;
use Illuminate\Database\Seeder;

class NonogramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = json_decode(file_get_contents('database/data/nonograms.json'), true);
        foreach ($content as $user) {
            $user['data'] = $user['data'];
            $user['colors'] = $user['colors'];
            Nonogram::create($user);
        }
    }
}
