<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'index category']);
        Permission::create(['name' => 'show category']);
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);

        Permission::create(['name' => 'index product']);
        Permission::create(['name' => 'show product']);
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);

        $customer = Role::create(['name' => 'customer']);

        $sales = Role::create(['name' => 'sales'])
            ->givePermissionTo(['index category', 'show category', 'create category', 'edit category', 
            'index product', 'show product', 'create product', 'edit product']);

        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());    
    }
}
