<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
        $movies = [
            [
                'title' => 'Праздники',
                'date'  => '2025-09-07',
                'image' => 'images/movies/prazniki.png',
                'nou'   => 'news',
                'genres'=> ['комедия'],
                'times' => [
                    ['ora' => '15:35', 'bani' => '1233', 'zal' => '3'],
                    ['ora' => '17:40', 'bani' => '3080', 'zal' => '6 VIP'],
                    ['ora' => '19:15', 'bani' => '1700', 'zal' => '4'],
                    ['ora' => '21:05', 'bani' => '1700', 'zal' => '3'],
                    ['ora' => '21:40', 'bani' => '4030', 'zal' => '6 VIP'],
                    ['ora' => '22:45', 'bani' => '1700', 'zal' => '3'],
                ],
            ],
            [
                'title' => 'Meg 2: Бездна',
                'date'  => '2025-08-24',
                'image' => 'images/movies/meg.png',
                'nou'   => '',
                'genres'=> ['экшен', 'триллер'],
                'times' => [
                    ['ora' => '15:35', 'bani' => '4030', 'zal' => '6 VIP'],
                    ['ora' => '17:40', 'bani' => '3080', 'zal' => '2 Auro'],
                    ['ora' => '19:15', 'bani' => '1700', 'zal' => '4'],
                ],
            ],
            [
                'title' => 'Заложники',
                'date'  => '2025-08-24',
                'image' => 'images/movies/zalojniki.png',
                'nou'   => '',
                'genres'=> ['экшен', 'триллер'],
                'times' => [
                    ['ora' => '16:10', 'bani' => '4030', 'zal' => '1'],
                    ['ora' => '21:30', 'bani' => '3080', 'zal' => '1'],
                ],
            ],
            [
                'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                'date'  => '2025-09-01',
                'image' => 'images/movies/ledibag.png',
                'nou'   => '',
                'genres'=> ['фентези', 'боевик', 'мелодрама', 'мультфильм', 'комедия'],
                'times' => [
                    ['ora' => '16:10', 'bani' => '4030', 'zal' => '1'],
                    ['ora' => '21:30', 'bani' => '3080', 'zal' => '1'],
                ],
            ],
            [
                'title' => 'Когда не загрузилась афиша',
                'date'  => '2025-09-01',
                'image' => 'images/movies/image-not-found.png',
                'nou'   => '',
                'genres'=> ['комедия'],
                'times' => [
                    ['ora' => '15:35', 'bani' => '1233', 'zal' => '3'],
                    ['ora' => '17:40', 'bani' => '3080', 'zal' => '6 VIP'],
                ],
            ],
            [
                'title' => 'Руслан и Людмила. Больше, чем сказка',
                'date'  => '2025-08-24',
                'image' => 'images/movies/ruslan.png',
                'nou'   => 'news',
                'genres'=> ['анимационное приключение'],
                'times' => [
                    ['ora' => '', 'bani' => '', 'zal' => ''],
                ],
            ],
        ];

        return view('home', compact('movies'));
    }
}
