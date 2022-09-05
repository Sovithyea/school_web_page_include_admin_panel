<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'topic' => 'សិក្ខាសាលា ONLINE (Webinar) ស្ដីអំពី ការថតរូបបែបអាជីព',
                'location' => 'Online Zoom',
                'image' => 'N/A',
                'time' => 'N/A',
                'date' => '06-Aug-2022'
            ],

            [
                'topic' => 'Successful Facebook Marketing',
                'location' => '#72,Str 566, Toul Kork Commune Phnom Penh 00855',
                'image' => 'N/A',
                'time' => 'N/A',
                'date' => '23-Mar-2019'
            ],

            [
                'topic' => 'សិក្ខាសាលាស្ដីអំពី "ត្រៀមខ្លួនដើម្បីក្លាយជាក្រុមផលិតភាពយន្ដដ៏ជោគជ័យ',
                'location' => 'Instinct Institute',
                'image' => 'N/A',
                'time' => 'N/A',
                'date' => '11-Aug-2018'
            ],

        ]);
    }
}
