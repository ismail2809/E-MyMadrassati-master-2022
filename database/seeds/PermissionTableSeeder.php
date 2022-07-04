<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;



class PermissionTableSeeder extends Seeder
{
    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

       $permissions = [ 
           'role-list', 'role-create', 'role-edit', 'role-delete',
           'product-list','product-create','product-edit','product-delete',
           'année-list','année-create','année-edit','année-delete',
           'absence-list','absence-create','absence-edit','absence-delete',
           'blog-list','blog-create','blog-edit','blog-delete',
           'categorie-list','categorie-create','categorie-edit','categorie-delete',
           'classe-list','classe-create','classe-edit','classe-delete',
           'demandedocument-list','demandedocument-create','demandedocument-edit','demandedocument-delete',
           'inscription-list','inscription-create','inscription-edit','inscription-delete',
           'renouvelment-list','renouvelment-create','renouvelment-edit','renouvelment-delete',
           'matiere-list','matiere-create','matiere-edit','matiere-delete',
           'niveau-list','niveau-create','niveau-edit','niveau-delete',
           'note-list','note-create','note-edit','note-delete',
           'payment-list','payment-create','payment-edit','payment-delete',

        ];



        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}