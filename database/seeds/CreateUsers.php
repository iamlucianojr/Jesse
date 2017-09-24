<?php

use Illuminate\Database\Seeder;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = new \App\User();
        $adminUser->name = 'Admin user';
        $adminUser->email = 'admin@jesse.com';
        $adminUser->password = bcrypt('123123');
        $adminUser->save();
    }
}
