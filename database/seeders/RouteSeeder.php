<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dashboard
        Route::insert([
            [
                'routes' => 'dashboard.index',
                'permission_name' => 'dashboard_index'
            ],
        ]);

         // General Setting
         Route::insert([
            [
                'routes' => 'settings.index',
                'permission_name' => 'setting_index'
            ],
            [
                'routes' => 'setting.update',
                'permission_name' => 'setting_update'
            ],
        ]);

        // Stunnings Management
        Route::insert([
            [
                'routes' => 'stunnings.index',
                'permission_name' => 'stunnings_index'
            ],
            [
                'routes' => 'stunnings.store',
                'permission_name' => 'stunnings_store'
            ],
            [
                'routes' => 'stunnings.update',
                'permission_name' => 'stunnings_update'
            ],
            [
                'routes' => 'stunnings.destroy',
                'permission_name' => 'stunnings_destroy'
            ],
        ]);

         // Menu Group Management
         Route::insert([
            [
                'routes' => 'menus.index',
                'permission_name' => 'menus_index'
            ],
            [
                'routes' => 'menus.store',
                'permission_name' => 'menu_store'
            ],
            [
                'routes' => 'menus.update',
                'permission_name' => 'menus_update'
            ],
            [
                'routes' => 'menus.destroy',
                'permission_name' => 'menu_destroy'
            ],
        ]);

        // Menu Item Management
        Route::insert([
            [
                'routes' => 'menus.items.index',
                'permission_name' => 'menus_items_index'
            ],
            [
                'routes' => 'menus.items.store',
                'permission_name' => 'menus_items_store'
            ],
            [
                'routes' => 'menus.items.update',
                'permission_name' => 'menus_items_update'
            ],
            [
                'routes' => 'menus.items.destroy',
                'permission_name' => 'menus_items_destroy'
            ],
        ]);

        // Route Management
        Route::insert([
            [
                'routes' => 'routes.index',
                'permission_name' => 'route_index'
            ],
            [
                'routes' => 'routes.store',
                'permission_name' => 'routes_store'
            ],
            [
                'routes' => 'routes.update',
                'permission_name' => 'routes_update'
            ],
            [
                'routes' => 'routes.destroy',
                'permission_name' => 'routes_destroy'
            ],
        ]);

        // Role Management
        Route::insert([
            [
                'routes' => 'roles.index',
                'permission_name' => 'roles_index'
            ],
            [
                'routes' => 'roles.store',
                'permission_name' => 'roles_store'
            ],
            [
                'routes' => 'roles.update',
                'permission_name' => 'roles_update'
            ],
            [
                'routes' => 'roles.destroy',
                'permission_name' => 'roles_destroy'
            ],
        ]);

        // Permission Management
        Route::insert([
            [
                'routes' => 'permissions.index',
                'permission_name' => 'permissions_index'
            ],
            [
                'routes' => 'permissions.store',
                'permission_name' => 'permissions_store'
            ],
            [
                'routes' => 'permissions.update',
                'permission_name' => 'permissions_update'
            ],
            [
                'routes' => 'permissions.destroy',
                'permission_name' => 'permissions_destroy'
            ],
        ]);
    }
}
