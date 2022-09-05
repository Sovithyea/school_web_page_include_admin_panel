<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            [
                'username' => 'administrator',
                'email' => 'admin@gmail.com',
                'firstname' => 'N/A',
                'lastname' => 'N/A',
                'gender' => 'N/A',
                'phonenumber' => 'N/A',
                'password' => bcrypt('12345678')
            ],

            [
                
                'username' => 'Teacher Mengheang',
                'email' => 'mengheangweb@gmail.com',
                'firstname' => 'N/A',
                'lastname' => 'N/A',
                'gender' => 'N/A',
                'phonenumber' => 'N/A',
                'password' => bcrypt('12345678')
            ],
            
            [
                'username' => 'Tiv Sovithyea',
                'email' => 'vithyeaweb@gmail.com',
                'firstname' => 'N/A',
                'lastname' => 'N/A',
                'gender' => 'N/A',
                'phonenumber' => 'N/A',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
