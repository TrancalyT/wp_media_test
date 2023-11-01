<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
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
                'description' => 'ACTIVE'
            ],
            [
                'description' => 'INACTIVE'
            ],
        ];

        foreach ($albumsData as $data) {
            DB::table('status')->insert($data);
        }
    }
}
