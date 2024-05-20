<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo Bizzare Adventure',
            'description' =>'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
            
        ],
        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
            
        ],
        [
            'id' => 4,
            'name' => 'Kartini',
            'description' => 'menggambarkan upaya-upaya Kartini untuk mengangkat harkat pada pengusaha di daerah setempat dan mendidik rakyat biasa serta kegigihannya untuk dapat sekolah tinggi.',
            
        ],
        [
            'id' => 5,
            'name' => 'Laskar Pelangi',
            'description' => 'menceritakan kehidupan 10 anak yang berasal dari keluarga kurang mampu. Namun, mereka memiliki semangat juang yang tinggi untuk tetap melanjutkan sekolah di Kampung Gantung, Bangka Belitung.',
            
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }

}
