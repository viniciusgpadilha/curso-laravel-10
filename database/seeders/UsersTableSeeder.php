<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(10)->create();

        // User::create([
        //     'name' => 'Carlos',
        //     'email' => 'carlos@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
