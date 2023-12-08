<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = json_decode(file_get_contents('database/data/tags.json'), true);
        foreach ($content as $tag) {
            Tag::create($tag);
        }
    }
}
