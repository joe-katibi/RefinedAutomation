<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use Spatie\Permission\Exceptions\PermissionAlreadyExists;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [


            // Dashboard
            [
                'module' => 'Dashboard',
                'sub_module' => 'Dashboard',
                'description' => 'View Dashboard',
                'name' => 'view-dashboard'
            ],
            [
                'module' => 'About',
                'sub_module' => 'about Us',
                'description' => 'About Us details',
                'name' => 'view-about-us'
            ],
            [
                'module' => 'Services',
                'sub_module' => 'Services',
                'description' => 'View Services',
                'name' => 'view-services'
            ],
            [
                'module' => 'Features',
                'sub_module' => 'Features',
                'description' => 'View Features',
                'name' => 'view-features'
            ],
            [
                'module' => 'Blog',
                'sub_module' => 'Blog',
                'description' => 'View Blog',
                'name' => 'view-blog'
            ],
            [
                'module' => 'Team',
                'sub_module' => 'Team',
                'description' => 'View Team',
                'name' => 'view-team'
            ],
            [
                'module' => 'Offer',
                'sub_module' => 'Offer',
                'description' => 'View Offer',
                'name' => 'view-Offer'
            ],
            [
                'module' => 'FAQS',
                'sub_module' => 'Faqs',
                'description' => 'View faqs',
                'name' => 'view-faqs'
            ],
            [
                'module' => 'Contacts',
                'sub_module' => 'Contacts',
                'description' => 'View Contacts',
                'name' => 'view-contacts'
            ],

            //Users

            [
                'module' => 'Users',
                'sub_module' => 'all Users',
                'description' => 'View Users',
                'name' => 'view-users-menu'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'Roles',
                'description' => 'View Roles',
                'name' => 'view-roles-menu'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'create Roles',
                'description' => 'Create button Roles',
                'name' => 'view-create-roles'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'edit Roles and permission',
                'description' => 'edit Roles and permission button Roles',
                'name' => 'view-edit-roles-permission'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'Permissions',
                'description' => 'View Permissions',
                'name' => 'view-permissions-menu'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'Departments',
                'description' => 'View Departments',
                'name' => 'view-departments-menu'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'Add Departments',
                'description' => 'add new Departments',
                'name' => 'view-add-departments'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'edit delete Departments',
                'description' => 'edit delete Departments',
                'name' => 'view-edit-delete-departments'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'add user or create',
                'description' => 'button to create user',
                'name' => 'view-create-user-button'
            ],
            [
                'module' => 'Users',
                'sub_module' => 'edit and user status',
                'description' => 'edit and user status button',
                'name' => 'view-edit-user-status'
            ],





        ];
        foreach ($permissions as $permission) {
            $permission = array_merge($permission, ['guard_name' => config('auth.defaults.guard')]);
            try {
                /** @var Permission $created_permission */
                $created_permission = Permission::findByName($permission['name'], $permission['guard_name']);
                $created_permission->description = $permission['description'];
                $created_permission->module = $permission['module'];
                $created_permission->sub_module = $permission['sub_module'];

                $created_permission->save();
            } catch (PermissionDoesNotExist $e) {
                Permission::insert($permission);
            }
        }

    }
}
