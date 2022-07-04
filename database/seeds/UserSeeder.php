<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$password ='123';
        DB::table('users')->insert([
        [
            'prenom' => Str::random(10),
            'nom' => 'Administrateur',
            'email' => 'admin@gmail.com',
            //'role' => 'admin',
            'avatar' => 'avatar/default-avatar.png',
            'password' => Hash::make($password),
        ],
        [
            'prenom' => 'Super',
            'nom' => 'Administrateur',
            'email' => 'super-admin@gmail.com',
            //'role' => 'super-admin',
            'avatar' => 'avatar/default-avatar.png',
            'password' => Hash::make($password),
        ],
        [
            'prenom' => Str::random(10),
            'nom' => 'Etudiant',
            'email' => 'etudiant@gmail.com',
            //'role' => 'etudiant',
            'avatar' => 'avatar/default-avatar.png',
            'password' => Hash::make($password),
        ],
        [
            'prenom' => Str::random(10),
            'nom' => 'Agent',
            'email' => 'agent@gmail.com',
            //'role' => 'agent',
            'avatar' => 'avatar/default-avatar.png',
            'password' => Hash::make($password),
        ],
        [
            'prenom' => Str::random(10),
            'nom' => 'Professeur',
            'email' => 'professeur@gmail.com',
            //'role' => 'professeur',
            'avatar' => 'avatar/default-avatar.png',
            'password' => Hash::make($password),
        ]
    ]);
    }
}
