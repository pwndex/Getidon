<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

    	DB::table('users')->insert([
            'id' => 1,
    		'name' => 'Admin',
    		'email' => 'admin@example.com',
    		'password' => Hash::make('admin'),
    		'is_admin' => 1
    	]);
    }
}
