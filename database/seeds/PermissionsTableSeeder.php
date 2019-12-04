<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de usuarios

        Permission::create([
            'name'          => 'Navegar Usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'         => 'Ver detalles del usuario',
            'slug'         => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',
        ]);


        Permission::create([
            'name'         => 'Edición de usuarios',
            'slug'         => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar usuario',
            'slug'         => 'users.destroy',
            'description'  => 'ELiminar cualquier usuario del sistema',
        ]);


        // Roles
        Permission::create([
            'name'         => 'Navegar roles',
            'slug'         => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del rol',
            'slug'         => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de roles',
            'slug'         => 'roles.create',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de roles',
            'slug'         => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar rol',
            'slug'         => 'roles.destroy',
            'description'  => 'ELiminar cualquier rol del sistema',
        ]);

        // Products
        Permission::create([
            'name'         => 'Navegar productos',
            'slug'         => 'products.index',
            'description'  => 'Lista y navega todos los productos del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del producto',
            'slug'         => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de productos',
            'slug'         => 'products.create',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de productos',
            'slug'         => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar producto',
            'slug'         => 'products.destroy',
            'description'  => 'ELiminar cualquier producto del sistema',
        ]);

        // Galeria
        Permission::create([
            'name'         => 'Navegar galeria',
            'slug'         => 'galeria.index',
            'description'  => 'Lista y navega todos las galerias del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del galeria',
            'slug'         => 'galeria.show',
            'description'  => 'Ver en detalle cada galeria del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de galerias',
            'slug'         => 'galeria.create',
            'description'  => 'Editar cualquier dato de un galeria del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de galerias',
            'slug'         => 'galeria.edit',
            'description'  => 'Editar cualquier dato de un galeria del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar galeria',
            'slug'         => 'galeria.destroy',
            'description'  => 'ELiminar cualquier galeria del sistema',
        ]);

        // Entrradas  del blog post
        Permission::create([
            'name'         => 'Navegar entradas blog',
            'slug'         => 'posts.index',
            'description'  => 'Lista y navega el entradas del blog',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de las entradas del blog',
            'slug'         => 'posts.show',
            'description'  => 'Ver en detalle cada entradas del blog',
        ]);


        Permission::create([
            'name'         => 'Creación de entradas blog',
            'slug'         => 'posts.create',
            'description'  => 'Editar cualquier dato de las entradas del blog',
        ]);

        Permission::create([
            'name'         => 'Edición de entradas blog',
            'slug'         => 'posts.edit',
            'description'  => 'Editar cualquier dato de un entradas del blog',
        ]);


        Permission::create([
            'name'         => 'Eliminar entradas del blog',
            'slug'         => 'posts.destroy',
            'description'  => 'ELiminar cualquier entradas del blog',
        ]);
    }
}
