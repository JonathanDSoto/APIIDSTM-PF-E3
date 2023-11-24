<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = json_decode(file_get_contents('database/data/categories.json'), true);
        foreach ($content as $category) {
            Category::create($category);
        }
    }
}
