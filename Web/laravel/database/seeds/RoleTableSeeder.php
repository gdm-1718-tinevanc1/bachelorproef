<?php

use Illuminate\Database\Seeder;
use EDS_site\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Admin', 'description' => 'Admin'],
            ['name' => 'Behandelaar', 'description' => 'Behandelaar'],
            ['name' => 'Patiënt', 'description' => 'Patiënt'],
        ];

        Role::insert($roles);
    }
}
