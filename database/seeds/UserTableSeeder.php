<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            
            'name'=> 'admin',
            'email' => 'vd16006@ues.edu.sv',
            'password'=> bcrypt('1234'),

        ]);
        User::create([
            
            'name'=> 'alumno',
            'email' => '1@hotmail.com',
            'password'=> bcrypt('1234'),

        ]);
    }
}
