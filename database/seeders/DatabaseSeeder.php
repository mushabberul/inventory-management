<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            Userseeder::class,
            MenuSeeder::class,
            ModuleSeeder::class,
            PermissionSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
