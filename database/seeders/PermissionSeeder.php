<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
        $admin = Role::create(['name' => 'admin']);
        $trainer = Role::create(['name' => 'trainer']);


        Permission::create(['name' => 'list sports']);
        Permission::create(['name' => 'create sports']);
        Permission::create(['name' => 'update sports']);
        Permission::create(['name' => 'delete sports']);

        Permission::create(['name' => 'list positions']);
        Permission::create(['name' => 'create positions']);
        Permission::create(['name' => 'update positions']);
        Permission::create(['name' => 'delete positions']);

        Permission::create(['name' => 'list positions']);
        Permission::create(['name' => 'create positions']);
        Permission::create(['name' => 'update positions']);
        Permission::create(['name' => 'delete positions']);

        Permission::create(['name' => 'list trainers']);
        Permission::create(['name' => 'create trainers']);
        Permission::create(['name' => 'update trainers']);
        Permission::create(['name' => 'delete trainers']);

        Permission::create(['name' => 'list teams']);
        Permission::create(['name' => 'create teams']);
        Permission::create(['name' => 'update teams']);
        Permission::create(['name' => 'delete teams']);

        Permission::create(['name' => 'list players']);
        Permission::create(['name' => 'create players']);
        Permission::create(['name' => 'update players']);
        Permission::create(['name' => 'delete players']);

        $admin->givePermissionTo(permission::all());
        $trainer->givePermissionTo(permission(['list players','list teams']));

        
        

    }
}
