<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a new admin when seeding
        $admin = new Admin();
        $admin->first_name = 'Mat';
        $admin->last_name = 'Mercer';
        $admin->username = 'admin';
        $admin->email = 'lukermatthew.tan@yahoo.com.ph';
        $admin->password = bcrypt('passw0rd');
        $admin->picture = '1.png';
        $admin->save();
    }
}
