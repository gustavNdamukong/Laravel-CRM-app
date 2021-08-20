<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create(['name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'jim', 'email' => 'admin2@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'king', 'email' => 'admin3@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'boy', 'email' => 'admin4@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'jules', 'email' => 'admin5@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'valery', 'email' => 'admin6@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'john', 'email' => 'admin7@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'susan', 'email' => 'admin8@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'janet', 'email' => 'admin9@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'cynthia', 'email' => 'admin10@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'vitalis', 'email' => 'admin11@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'buck', 'email' => 'admin12@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'dara', 'email' => 'admin13@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'natasha', 'email' => 'admin14@admin.com', 'password' => Hash::make('password')]);
        User::create(['name' => 'peter', 'email' => 'admin15@admin.com', 'password' => Hash::make('password')]);
    }
}
