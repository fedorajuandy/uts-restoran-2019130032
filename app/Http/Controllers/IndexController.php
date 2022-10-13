<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cards = [
            [
                "url" => "https://source.unsplash.com/G-jo31ESuRE/100px180",
                "title" => "Edward R.",
                "text" => "Restaurant owner"
            ],
            [
                "url" => "https://source.unsplash.com/v3OlBE6-fhU/100px180",
                "title" => "Steph E.",
                "text" => "Executive chef"
            ],
            [
                "url" => "https://source.unsplash.com/0Zx1bDv5BNY/100px180",
                "title" => "Anna G.",
                "text" => "General manager"
            ]
        ];

        return view('/index', compact('cards'));
    }
}
