<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$f1LHCyEXFfhN3Bdp64uLRe/WLv8wOzWgyn4LZ.iqrjRWAfH5RBNLu',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
