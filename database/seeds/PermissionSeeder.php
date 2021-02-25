<?php

use Illuminate\Database\Seeder;
use \App\Model\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $manageUsers = new Permission();
        $manageUsers->name = 'Manage users';
        $manageUsers->slug = 'manage-users';
        $manageUsers->save();

        $createTasks = new Permission();
        $createTasks->name = 'Create Tasks';
        $createTasks->slug = 'create-tasks';
        $createTasks->save();
    }
}
