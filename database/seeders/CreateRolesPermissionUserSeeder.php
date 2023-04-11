<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateRolesPermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::where('name', 'like', '%posts.%')
                         ->orWhere('name', 'like', '%logout.%')
                         ->get()
                         ->pluck('id','id')
                         ->all();
        $role = Role::create(['name' => 'user']);

   
        $role->syncPermissions($permissions);
    }
}
