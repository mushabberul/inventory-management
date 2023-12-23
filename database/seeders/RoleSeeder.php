<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_name' => 'Super Admin',
                'deletable' => 2
            ],
            [
                'role_name' => 'Admin',
                'deletable' => 2
            ]
        ];
        Role::insert($roles);
    }
}
