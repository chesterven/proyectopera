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
        //
        Permission::create([
            'name' => 'Ver los accesos',
            'slug' => 'accesos',
            'description' => 'Accesos',
        ]);
        Permission::create([
            'name' => 'Ver los accesos detalle',
            'slug' => 'detalle.accesos',
            'description' => 'Accesos detalle',
        ]);
    }
}
