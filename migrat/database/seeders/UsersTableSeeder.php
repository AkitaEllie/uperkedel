<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'TGODS',
            'email' => 'nael26nj@gmail.com',
            'password' => Hash::make('uwu'), // Use a secure hashed password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
