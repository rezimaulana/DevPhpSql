<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Rezi',
            'role' => 'admin',
            'email' => 'rsazrm@gmail.com',
            'password' => bcrypt('rezimaulana10')
        ]);
        DB::table('users')->insert([
            'name' => 'Ghani',
            'role' => 'student',
            'studentId' => 1,
            'email' => 'ghani@gmail.com',
            'password' => bcrypt('rezimaulana10')
        ]);
        DB::table('users')->insert([
            'name' => 'Rifqi',
            'role' => 'student',
            'studentId' => 2,
            'email' => 'rifqi@gmail.com',
            'password' => bcrypt('rezimaulana10')
        ]);
    }
}
