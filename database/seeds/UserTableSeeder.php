<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_Subscriber = Role::where('name', 'Subscriber')->first();
        $role_Administrator  = Role::where('name','Administrator')->first();
        $employee = new User();
        $employee->avatar_id = 2;
        $employee->name = 'bahar daryosh';
        $employee->email = 'bahar.daryosh@gmail.com';
        $employee->is_active = 1;
        $employee->password = bcrypt('12345678');
        $employee->save();
        $employee->roles()->attach($role_Administrator);
        $manager = new User();
        $manager->avatar_id = 4;
        $manager->name = 'yorsa hosseini';
        $manager->email = 'yosra.h@gmail.com';
        $manager->password = bcrypt('12345678');
        $manager->save();
        $manager->roles()->attach($role_Subscriber);
    }
}
