<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
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
                'role_id' => 1,
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'gender' => 'male',
                'status' => 1,
                'password' => Hash::make('superadmin')
            ]
        ];

        User::insert($users);
    }
}
