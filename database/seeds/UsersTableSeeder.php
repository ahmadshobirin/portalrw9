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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@portalrw9.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1,
            'is_status' => 1,
        ]);
    }
}
