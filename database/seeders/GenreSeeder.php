<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Jojo Bizzare Adventure',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ]);

        Genre::create([
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ]);

        Genre::create([
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ]);

        Genre::create([
            'name' => 'Kartini',
            'description' => 'Menggambarkan upaya-upaya Kartini untuk mengangkat harkat pada pengusaha di daerah setempat dan mendidik rakyat biasa serta kegigihannya untuk dapat sekolah tinggi.'
        ]);

        Genre::create([
            'name' => 'Laskar Pelangi',
            'description' => 'Menceritakan kehidupan 10 anak yang berasal dari keluarga kurang mampu. Namun, mereka memiliki semangat juang yang tinggi untuk tetap melanjutkan sekolah di Kampung Gantung, Bangka Belitung.'
        ]);
    }
}
