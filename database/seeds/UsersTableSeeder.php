<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'Matahari@gmail.com',
                'password' => bcrypt('Matahari1234'),
            ]
        ];

        User::insert($users);
    }
}
