<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'name' => 'Ghani Rizqan',
            'studentId' => '101',
            'dob' => '1998-10-09'
        ]);
        DB::table('students')->insert([
            'name' => 'Rifqi Naufal',
            'studentId' => '102',
            'dob' => '1998-11-11'
        ]);
    }
}
