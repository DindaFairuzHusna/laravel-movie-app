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
            'id' => 1,
            'movie_id' => 1,
            'user' => 'Yolanda Zerlina',
            'rating' => '10/10',
            'date' => '20-05-2022',
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'user' => 'salsabila',
            'rating' => '6/10',
            'date' => '29-12-2021',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'user' => 'Rahmaleli',
            'rating' => '10/10',
            'date' => '02-10-2020',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 4,
            'user' => 'Junita',
            'rating' => '10/10',
            'date' => '10-01-2018',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 5,
            'user' => 'Azriel',
            'rating' => '8/10',
            'date' => '10-05-2024',
        ]);
    }
}
