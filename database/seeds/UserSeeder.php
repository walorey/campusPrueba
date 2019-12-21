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
        DB::table('users')->insert([
        	'name'     => 'Facundo',
        	'lastname' => 'Avendaño',
        	'email'    => 'facundo.avendano77@gmail.com',
        	'password' => bcrypt('39162562'),
        	'type'     => 'admin'

        ]);
    }
}
