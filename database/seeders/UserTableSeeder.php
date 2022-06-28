<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ninja Admin',
            'email' => 'admin@gmail.com',
            'phone' => '09768931860',
            'password' => Hash::make('admin123'),
        ]);
    }
}
