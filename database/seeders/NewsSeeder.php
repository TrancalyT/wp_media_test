<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsData = [
            [
                'title' => 'LIVE VOL.2 - OUT NOW',
                'keywords' => '#parcels, #livevol2, #albumrelease',
                'text' => 'I think a lot of things lead up to us making this record. Maybe we finally allowed ourselves to musically reflect our years in Berlin, moments in dark nightclubs flying high. We wanted to transport people into the club with us. Into the tense, faceless, euphoric world that can present itself in the right environment with the right repetition of the right chords and rhythms. Transcendence. When people stop thinking and just feel, just move. That deep escape.
                Beforehand we had many months touring the world, playing festivals and headline shows. Trying to make a crowd move. We felt a pull towards dance music so we started to sneak more of these long repetitious tangents into our set. On the last tour in Europe half of the set was a rave and the other half was the more traditional songs. We didn’t feel like we could go much further with it at our concerts though, especially the bigger ones. It was already divisive amongst our fans and for this dance stuff to work we really needed the whole crowd to take the trip with us and to let go. So we figured for ‘Live Vol. 2’, why not go all the way there! Here was an opportunity to rent a small club, to take away the name Parcels, and all the expectations that come with it, and just have a hot room full of people dancing.
                The previous year on the road was like training, learning to enter these long semi-improvised dance sections, learning how to communicate with each other and how to keep a crowd on their toes. Every night we honed in closer on new, rearranged versions of Parcels songs. ‘Live Vol. 2’ was where we would really let loose and drive it home. We would play for 2 hours, just dance music.
                And it was an experiment, a risk, because we’d never done it so purely before.',
            ],
        ];

        foreach ($newsData as $data) {
            DB::table('news')->insert($data);
        }
    }
}
