<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create role
        $adminRole = Role::create(['name' => 'admin']);
        $ownerRole = Role::create(['name' => 'cafeteria owner']);
        $customerRole = Role::create(['name' => 'customer']);


        // Create permissions
        $manageUsersPermission = Permission::create(['name' => 'manage users']);
        $manageCafeteriasPermission = Permission::create(['name' => 'manage cafeterias']);
        $manageOrdersPermission = Permission::create(['name' => 'manage orders']);
        $manageSystemSettingsPermission = Permission::create(['name' => 'manage system settings']);
        $viewReportsPermission = Permission::create(['name' => 'view reports']);

        // Assign permissions to roles
        $adminRole->syncPermissions([
            $manageUsersPermission,
            $manageCafeteriasPermission,
            $manageOrdersPermission,
            $manageSystemSettingsPermission,
            $viewReportsPermission,
        ]);

        $ownerRole->syncPermissions([
            $manageCafeteriasPermission,
            $manageOrdersPermission,
        ]);

        $customerRole->syncPermissions([
            $manageOrdersPermission,
        ]);


        // $rateCafeteriasPermission = Permission::create(['name' => 'rate cafeterias']);
        // $accessLoyaltyProgramsPermission = Permission::create(['name' => 'access loyalty programs']);
        // $manageFavoriteCafeteriasPermission = Permission::create(['name' => 'manage favorite cafeterias']);
    }
}
