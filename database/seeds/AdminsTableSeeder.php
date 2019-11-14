<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Hani',
            'email' => 'hani.majebry@gmail.com',
            'password' => '$2y$10$pECiojRViYEuu6Wj8loftu6HTyq930g9lIoZbEeYmet/vBSCMEpNy'
        ]);
    }
}
