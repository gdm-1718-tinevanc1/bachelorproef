<?php

use Illuminate\Database\Seeder;
use EDS_site\User;
use EDS_site\Models\Role;
use EDS_site\Models\Profile;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();        
        $user->username = 'admin';  
        $user->email = 'admin@test.be';  
        $user->password = bcrypt('secret');  
        $user->profile_id = factory(EDS_site\Models\Profile::class)->create()->id;  
        $user->save();

        $user->roles()->attach(1);

        factory(User::class, 50)->create()->each(function ($u) {            
            $role = Role::all()->random();
            $role_id = $role->getAttribute('id');
            $u->roles()->attach($role_id);
        });    
    }
}