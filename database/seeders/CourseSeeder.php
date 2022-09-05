<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'PHP LARAVEL',
                'image' => 'N/A',
                'duration' => 'N/A',
                'skill_level' => 'N/A',
                'start_class' => 'N/A',
                'price' => '150',
                'course_type_id' => 1
            ],

            [
                
                'title' => 'Flutter',
                'image' => 'N/A',
                'duration' => 'N/A',
                'skill_level' => 'N/A',
                'start_class' => 'N/A',
                'price' => '150',
                'course_type_id' => 2
            ],
            
            [
                'title' => 'Auto Cad',
                'image' => 'N/A',
                'duration' => 'N/A',
                'skill_level' => 'N/A',
                'start_class' => 'N/A',
                'price' => '150',
                'course_type_id' => 4
            ]
        ]);
    }
}
