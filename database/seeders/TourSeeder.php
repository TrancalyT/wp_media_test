<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Exemple de données de test pour la table "tour"
        $tourData = [
            [
                'date' => '18.11.2023',
                'location' => 'Corona Capital',
                'country' => 'Mexico City',
                'ticket' => 'https://www.coronacapital.com.mx/boletos.html',
            ],
            [
                'date' => '01.03.2024',
                'location' => 'Pelupo FEST',
                'country' => 'PATTAYA',
                'ticket' => 'https://www.pelupo.com/',
            ],
            [
                'date' => '05.03.2024',
                'location' => 'Club QUATTRO',
                'country' => 'TOKYO',
                'ticket' => 'https://eplus.jp/parcels/',
            ],
            [
                'date' => '07.03.2024',
                'location' => 'YES24 LOVE HALL',
                'country' => 'SEOUL',
                'ticket' => 'http://ticket.yes24.com/Special/47359',
            ],
            [
                'date' => '09.03.2024',
                'location' => 'Wanderland Music',
                'country' => 'MANILA',
                'ticket' => 'https://wanderlandfest.com/',
            ],
            [
                'date' => '13.03.2024',
                'location' => 'KITEC MUSICZONE',
                'country' => 'HONG KONG',
                'ticket' => 'https://www.ticketflap.com/parcels',
            ],
            [
                'date' => '15.03.2024',
                'location' => 'LEGACY',
                'country' => 'TAPEI',
                'ticket' => 'https://youngteam.kktix.cc/events/parcels2024',
            ],
            [
                'date' => '17.06.2024',
                'location' => 'RED ROCKS',
                'country' => 'COLORADO (USA)',
                'ticket' => 'https://www.axs.com/events/507551/parcels-tickets',
            ],
        ];

        foreach ($tourData as $data) {
            DB::table('tour')->insert($data);
        }
    }
}
