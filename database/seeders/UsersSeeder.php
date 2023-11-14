<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'TestUser',
            'email' => 'test@email.com',
            'password' => password_hash('test123', PASSWORD_BCRYPT),
        ];

        User::create($user);
    }
}
