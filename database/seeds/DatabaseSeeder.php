<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);

        \Illuminate\Support\Facades\DB::beginTransaction();

        \Illuminate\Support\Facades\DB::commit();
    }
}
