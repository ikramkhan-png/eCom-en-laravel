<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'ikram',
            'email'=>'admin@admin',
            'password'=>Hash::make('admin@')
        ]);
        DB::table('users')->insert([
            'name'=>'ihtisham',
            'email'=>'ihtisham@admin',
            'password'=>Hash::make('ihtisham@')
        ]);
    }
}
