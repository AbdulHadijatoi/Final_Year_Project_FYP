<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            ['username' => 'abdulhadi',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Admin',
            ],
            [
            'username' => 'sanaullah',
            'email' => 'student'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            ],
            [
            'username' => 'hadi',
            'email' => 'teacher'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            ],
            [
            'username' => 'sana_ullah',
            'email' => 'sanaullah'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            ]
        ];
        User::insert($users);

    }
}
