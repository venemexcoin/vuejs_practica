<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);

        factory(App\User::class, 5)->create();
        factory(App\Product::class, 5)->create();

        App\User::Create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('#Bjork3552')
        ]);
        Role::create([
            'name'    => 'Admin',
            'slug'    => 'admin',
            'special' => 'all-access'
        ]);
    }
}
