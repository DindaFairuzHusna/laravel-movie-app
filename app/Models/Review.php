<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Kartini',
            'user' => 'Yolanda Zerlina',
            'rating' => '10/10',
            'date' =>'20-052024',
        ],
        [
            'id' => 2,
            'movie' => 'Losmen Bu Broto',
            'user' => 'Rahmaleli',
            'rating' => '8/10',
            'date' => '19-02-2024',
            
        ],
        [
            'id' => 3,
            'movie' => 'The Nun',
            'user' => 'Salsa Hilmania',
            'rating' => '6/10',
            'date' => '06-12-2023',
            
        ],
        [
            'id' => 4,
            'movie' => 'Keramat 2',
            'user' => 'Siti',
            'rating' => '10/10',
            'date' => '13-02-2023',
            
        ],
        [
            'id' => 5,
            'movie' => 'Orang Kaya Baru',
            'user' => 'Junita',
            'rating' => '8/10',
            'date' => '08-08-2020',
            
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }

}
