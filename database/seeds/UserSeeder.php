<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
use App\Model\Permission;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Role::where('slug','admin')->first();
        $proj_manager = Role::where('slug', 'project_manager')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user_1 = new User();
        $user_1->name = 'John Wick';
        $user_1->email = 'john@example.com';
        $user_1->password = bcrypt('12345678');
        $user_1->save();
        $user_1->roles()->attach($admin);
        $user_1->permissions()->attach($manageUsers);

        $user_2 = new User();
        $user_2->name = 'Robert';
        $user_2->email = 'robert@example.com';
        $user_2->password = bcrypt('12345678');
        $user_2->save();
        $user_2->roles()->attach($proj_manager);
        $user_2->permissions()->attach($createTasks);

    }
}
