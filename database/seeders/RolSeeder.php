<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{  
    public function run()
    {
        
        $role1 = Role::create(['name' => 'Root']);
        $role2 = Role::create(['name' => 'Admin']);


        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);
        

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver el dashboard'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver listado de categorias'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1]);



        Permission::create([
            'name' => 'admin.release.index',
            'description' => 'Ver listado de comunicacion'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.release.create',
            'description' => 'Crear comunicacion'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.release.edit',
            'description' => 'Editar comunicacion'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.release.destroy',
            'description' => 'Eliminar comunicacion'
        ])->syncRoles([$role1, $role2]);


        Permission::create([
            'name' => 'admin.views.index',
            'description' => 'Ver listado de la galeria'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.create',
            'description' => 'Crear imagen'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.edit',
            'description' => 'Editar imagen'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.views.destroy',
            'description' => 'Eliminar imagen'
        ])->syncRoles([$role1, $role2]);

    }
}
