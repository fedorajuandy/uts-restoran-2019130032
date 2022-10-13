<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            [
                "url" => "https://source.unsplash.com/1X4PUDh_jXg/800x400",
                "title" => "Most popular",
                "name" => "Goat noodles"
            ],
            [
                "url" => "https://source.unsplash.com/oT7_v-I0hHg/800x400",
                "title" => "Most bought",
                "name" => "Paella"
            ],
            [
                "url" => "https://source.unsplash.com/pe9dvM1rQkM/800x400",
                "title" => "Favorite",
                "name" => "Steak with truffle oil fries"
            ]
        ];

        $cards = [
            [
                "url" => "https://source.unsplash.com/G-jo31ESuRE/100px180",
                "title" => "Everybody E.",
                "text" => "Restaurant owner"
            ],
            [
                "url" => "https://source.unsplash.com/v3OlBE6-fhU/100px180",
                "title" => "Somebody E.",
                "text" => "Executive chef"
            ],
            [
                "url" => "https://source.unsplash.com/0Zx1bDv5BNY/100px180",
                "title" => "Anybody E.",
                "text" => "General manager"
            ]
        ];

        return view('/products', compact('carousels', 'cards'));
    }
}
