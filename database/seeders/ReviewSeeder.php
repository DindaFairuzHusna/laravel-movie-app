<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => '1',
            'movie' => 'Kartini',
            'user' => 'Yolanda Zerlina',
            'rating' => '10/10',
            'date' => '20-05-2022',
        ]);

        Review::create([
            'id' => '2',
            'movie' => 'The Nun',
            'user' => 'salsabila',
            'rating' => '6/10',
            'date' => '29-12-2021',
        ]);

        Review::create([
            'id' => '3',
            'movie' => 'Losmen Bu Broto',
            'user' => 'Rahmaleli',
            'rating' => '10/10',
            'date' => '02-10-2020',
        ]);

        Review::create([
            'id' => '4',
            'movie' => 'Laskar Pelangi',
            'user' => 'Junita',
            'rating' => '10/10',
            'date' => '10-01-2018',
        ]);

        Review::create([
            'id' => '5',
            'movie' => 'Vina',
            'user' => 'Azriel',
            'rating' => '8/10',
            'date' => '10-05-2024',
        ]);
    }
}
