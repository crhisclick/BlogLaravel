<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,29)->create();
        App\User::create([
            'name'=>'Crhistian Mendoza',
            'email'=>'prueba@prueba.com',
            'password'=>bcrypt('prueba')
        ]);
    }
}
