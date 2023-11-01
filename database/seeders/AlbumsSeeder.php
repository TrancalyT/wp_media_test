<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albumsData = [
            [
                'link' => 'https://www.discogs.com/fr/master/1437728-Parcels-Parcels',
                'cover' => 'cover_1.jpg',
                'year' => '2018 (Kitsuné)',
                'title' => 'PARCELS',
            ],
            [
                'link' => 'https://www.discogs.com/fr/release/15222265-Parcels-Live-Vol1',
                'cover' => 'cover_2.jpg',
                'year' => '2020 (Kitsuné)',
                'title' => 'Live VOL.1',
            ],
            [
                'link' => 'https://www.discogs.com/fr/master/2367508-Parcels-DayNight',
                'cover' => 'cover_3.jpg',
                'year' => '2021 (Kitsuné)',
                'title' => 'PARCELS',
            ],
            [
                'link' => 'https://www.discogs.com/fr/master/3282730-Parcels-Live-Vol2',
                'cover' => 'cover_4.jpg',
                'year' => '2023 (Because Music)',
                'title' => 'Live VOL.2',
            ],
        ];

        foreach ($albumsData as $data) {
            DB::table('albums')->insert($data);
        }
    }
}
