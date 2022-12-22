<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->insert(
            ['name'=>'Jhon',
            'email'=>'def@gmail.com',
            'gender'=>'m',
            'address'=>'colombo',
            'mobile'=>0776543210,
            'role'=>'admin',
            'password'=>Hash::make('test1234'),           
            'remember_token'=>Str::random(11),]
        );
    }
    
}
