<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use database\seeds\ContactsTableSeeder;

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
            // $password = Hash::make('secret');
            
            // DB::table('users')->insert([
            // 	'name' => 'Juanito',
            // 	'email' => 'juanito@app.com',
            // 	'password' => $password,
            // 	'remember_token' => 'secret',
            // ]);

            $password = Hash::make('hola123');

            DB::table('users')->insert([
                'name' => 'Mauricio Romero',
                'email' => '9866983@mail.com',
                'password' => $password,
                'remember_token' => 'hola123',
            ]);
        }
    }
}
