<?php

namespace Database\Seeders;


use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            'menu_name' => 'Backend Menu',
            'deletable' => 2
        ];
        Menu::insert($menus);
    }
}
