<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();

        $quizes = [
            ['username' => 'abdulhadi',
            'email' => 'admin'.'@gmail.com',
            'password' => ('11111111'),
            'role'=> 'Admin',
            ],
            [
            'username' => 'sanaullah',
            'email' => 'student'.'@gmail.com',
            'password' => ('11111111'),
            'role'=> 'Student',
            ],
            [
            'username' => 'hadi',
            'email' => 'teacher'.'@gmail.com',
            'password' => ('11111111'),
            'role'=> 'Teacher',
            ],
            [
            'username' => 'sana_ullah',
            'email' => 'sanaullah'.'@gmail.com',
            'password' => ('11111111'),
            'role'=> 'Teacher',
            ]
        ];
        Quiz::insert($quizes);
    }
}
