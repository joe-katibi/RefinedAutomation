<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super-admin
        try {
                $role = Role::create(['name' => 'super-admin', 'description' => 'Super Admin']);
            } catch (\Spatie\Permission\Exceptions\RoleAlreadyExists $e) {
                // Ignore
            }
            $role = Role::findByName('super-admin');
            $role->givePermissionTo(Permission::all());

            
         // admin
         try {
            $roleAdmin = Role::create(['name' => 'Admin', 'description' => 'Admin']);
        } catch (\Spatie\Permission\Exceptions\RoleAlreadyExists $e) {
            // Ignore
        }
        $roleAdmin= Role::findByName('Admin');
          // Find or create specific permissions
          $permissions = ['view-add-departments','view-create-user-button','view-create-roles','view-edit-user-status','view-edit-delete-departments','view-edit-roles-permission','view-departments-menu','	view-permissions-menu','view-roles-menu','view-users-menu'];
          foreach ($permissions as $permissionName) {
          $permission = Permission::where('name', $permissionName)->first();

          // Assign the permission to the role
          $roleAdmin->givePermissionTo($permission);
           }

                    // USer
         try {
            $roleAgent = Role::create(['name' => 'User', 'description' => 'User']);
        } catch (\Spatie\Permission\Exceptions\RoleAlreadyExists $e) {
            // Ignore
        }
        $roleAgent = Role::findByName('User');
        // Find or create specific permissions
          $permissions = ['view-dasboard-agent', 'view-results-menu','view-agent-exam-menu','view-results-audit-menu','view-results-exam-menu','view-results-autofail-menu','view-results-audit-button-menu','view-results-exam-button-menu','view-results-autofail-button-menu','view-results-audit-button','view-results-audit-edit','view-results-audit-delete','view-results-autofail-button','view-results-autofail-button-view','view-start-results-exam-buttons','view-saving-done-exam-button','agent-report-autofail-request','agent-report-request','admin-agent-exam-results'];
          foreach ($permissions as $permissionName) {
          $permission = Permission::where('name', $permissionName)->first();
         // Assign the permission to the role
         $roleAgent->givePermissionTo($permission);
         }
    }
}
