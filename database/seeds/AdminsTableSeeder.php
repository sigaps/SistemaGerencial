<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB:: table('users')->insert(array(
            ['name' =>'Sofia Martinez',
            'email'=>'sofia.martinez@gmail.com',
            'password'=>\Hash::make('user01'),
            'type' =>'estrategico',
            'active' =>'1'],

            ['name' =>'Rodrigo Moran',
            'email'=>'rodrigo.moran@gmail.com',
            'password'=>\Hash::make('user01'),
            'type' =>'tactico',
            'active' =>'1'],

            ['name' =>'Kevin Perez',
            'email'=>'kevin.perez@gmail.com',
            'password'=>\Hash::make('user01'),
            'type' =>'tactico',
            'active' =>'1'],

            ['name' =>'Brallan Sanchez',
            'email'=>'brallan.sanchez@gmail.com',
            'password'=>\Hash::make('user01'),
            'type' =>'administrador',
            'active' =>'1']

            ));
    }
}
