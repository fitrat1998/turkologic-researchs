<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fish' => 'Loiq',
            'email' => 'admin_loiq@gmail.com',
            'workplace' => 'samsu',
            'position' => 'developer',
            'phone' => 998901234567,
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
