<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'address' => 'admin address not identified',
            'phone' => 11111111111
        ]);

        DB::table('users')->insert([
            'name' => 'budi setiawan',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'member',
            'address' => 'jalan krakatau no 8',
            'phone' => 222222222222
        ]);
    }
}
