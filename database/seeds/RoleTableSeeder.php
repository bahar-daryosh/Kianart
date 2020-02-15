<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_employee = new Role();
        $role_employee->name = 'Administrator';
        $role_employee->description = 'admin';
        $role_employee->save();
        $role_manager = new Role();
        $role_manager->name = 'Subscriber';
        $role_manager->description = 'subscriber';
        $role_manager->save();
        $role_manager = new Role();
        $role_manager->name = 'Seller';
        $role_manager->description = 'a seller';
        $role_manager->save();
        $role_manager = new Role();
        $role_manager->name = 'Buyer';
        $role_manager->description = 'buyer';
        $role_manager->save();
        $role_manager = new Role();
        $role_manager->name = 'Guest';
        $role_manager->description = 'guest';
        $role_manager->save();

    }
}
