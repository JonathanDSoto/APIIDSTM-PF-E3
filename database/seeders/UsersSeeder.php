<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = json_decode(file_get_contents('database/data/users.json'), true);
        foreach ($content as $user) {
            User::create($user);
        }
    }
}
