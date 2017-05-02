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
        if(env('APP_ENV') != 'production')
        {
            $password = Hash::make('secret');
            DB::table('users')->insert([
            	'name' => 'Juanito',
            	'email' => 'juanito@app.com',
            	'password' => $password,
            	'remember_token' => 'secret',
            ]);
        }
    }
}
