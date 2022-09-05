<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudyTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_tips')->insert([
            [
                'title' => 'សម្រាប់អ្នកដែលមានបញ្ហានៅក្នុងការប្រើប្រាស់កម្មវិធី Microsoft office ពេលនេះលែងជាបញ្ហាទៀតហើយ',
                'link' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Finstinct.institute%2Fvideos%2F1250097025396490%2F&show_text=false&width=560&t=0',
                'image' => 'N/A'
            ],

            [
                'title' => 'សម្រាប់អ្នកដែលមានរូបភាពអត់ពេញដល់គែមការ៉េបួនជ្រុងតោះ! មកមើលអំពីវិធីសាស្ត្រ ក្នុងការពង្រីករូបអោយពេញដល់គែមនៅក្នុង Adobe Photoshop ទាំងអស់គ្នា',
                'image' => 'N/A',
                'link' => 'https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finstinct.institute%2Fvideos%2F4672724272828056%2F&show_text=false&width=267&t=0' 
            ],
            
            [
                'title' => 'ខ្ខិលគូស Pentool ក្នុង Illustrator មែនអត់? តោះចឹងមើលគន្លឹះងាយៗពី #cliptips នេះត្រូវហើយ',
                'image' => 'N/A',
                'link' => 'https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finstinct.institute%2Fvideos%2F367173935513217%2F&show_text=false&width=267&t=0' 
            ]
        ]);
    }
}
