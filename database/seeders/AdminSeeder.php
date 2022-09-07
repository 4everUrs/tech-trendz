<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name'=>'Techie Trendz',
            'email'=>'admin@techtrendzph.com',
            'username'=>'admin',
            'password'=>Hash::make('admin'),
            'current_team_id'=>'1',
            'role_id'=> '0',
            'department_id'=>'0'
        ]);
    }
}
