<?php

use Illuminate\Database\Seeder;
use \App\Model\Role;
use \App\Model\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'Admin';
        $admin->save();

        $proj_manager = new Role();
        $proj_manager->name = 'Project Manager';
        $proj_manager->slug = 'project_manager';
        $proj_manager->save();
    }
}
