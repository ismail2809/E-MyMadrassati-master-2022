<?php

use Illuminate\Database\Seeder;
 
use App\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

            'nom' => 'Alaoui', 
            
            'prenom' => 'Ismael', 

            'email' => 'super-admin1@gmail.com',

            'password' => bcrypt('123')

        ]);

        $role = Role::create(['name' => 'Super admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }

}