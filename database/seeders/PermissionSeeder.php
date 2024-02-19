<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'general']);
        Permission::create(['name' => 'setting']);

        // dashboard
        Permission::create(['name' => 'dashboard_index']);

        // General Setting
        Permission::create(['name' => 'setting_index']);
        Permission::create(['name' => 'setting_update']);

        // User Management
        Permission::create(['name' => 'stunnings_index']);
        Permission::create(['name' => 'stunnings_store']);
        Permission::create(['name' => 'stunnings_update']);
        Permission::create(['name' => 'stunnings_destroy']);

        // Menu Management Group
        Permission::create(['name' => 'menus_index']);
        Permission::create(['name' => 'menus_store']);
        Permission::create(['name' => 'menus_update']);
        Permission::create(['name' => 'menus_destroy']);

        // menus Management Items
        Permission::create(['name' => 'menus_items_index']);
        Permission::create(['name' => 'menus_items_store']);
        Permission::create(['name' => 'menus_items_update']);
        Permission::create(['name' => 'menus_items_destroy']);

        // Route Management
        Permission::create(['name' => 'routes_index']);
        Permission::create(['name' => 'routes_store']);
        Permission::create(['name' => 'routes_update']);
        Permission::create(['name' => 'routes_destroy']);

        // Role Management
        Permission::create(['name' => 'roles_index']);
        Permission::create(['name' => 'roles_store']);
        Permission::create(['name' => 'roles_update']);
        Permission::create(['name' => 'roles_destroy']);

        // Permission Management
        Permission::create(['name' => 'permissions_index']);
        Permission::create(['name' => 'permissions_store']);
        Permission::create(['name' => 'permissions_update']);
        Permission::create(['name' => 'permissions_destroy']);
    }
}
