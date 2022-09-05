<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_types')->insert([
            [
                'title' => 'Web Development'
            ],

            [
                'title' => 'Mobile Development'
            ],
            
            [
                'title' => 'Media & Graphic Design'
            ],

            [
                'title' => 'Architectural & Interior Design'
            ]
        ]);
    }
}
