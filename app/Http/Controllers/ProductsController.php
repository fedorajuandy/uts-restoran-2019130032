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
                "url" => "https://source.unsplash.com/mvTvOFa-hQ4/800x400",
                "title" => "Most bought",
                "name" => "Sandwich"
            ],
            [
                "url" => "https://source.unsplash.com/pe9dvM1rQkM/800x400",
                "title" => "Favorite",
                "name" => "Steak with truffle oil fries"
            ]
        ];

        $breakfast = [
            [
                "url" => "https://source.unsplash.com/mvTvOFa-hQ4/640x480",
                "name" => "Sandwich",
                "price" => "22,500"
            ],
            [
                "url" => "https://source.unsplash.com/4gmBIFraSuE/640x480",
                "name" => "Scrambled egg",
                "price" => "25,000"
            ],
            [
                "url" => "https://source.unsplash.com/Znvxeud6sDc/640x480",
                "name" => "Baguette",
                "price" => "29,000"
            ],
            [
                "url" => "https://source.unsplash.com/CY-OkOICA9o/640x480",
                "name" => "Oatmeal",
                "price" => "25,000"
            ],
            [
                "url" => "https://source.unsplash.com/qqIj5pV48-s/640x480",
                "name" => "Croissant",
                "price" => "27,000"
            ]
        ];

        $meals = [
            [
                "url" => "https://source.unsplash.com/1X4PUDh_jXg/640x480",
                "name" => "Goat noodles",
                "price" => "35,000"
            ],
            [
                "url" => "https://source.unsplash.com/oT7_v-I0hHg/640x480",
                "name" => "Paella",
                "price" => "50,000"
            ],
            [
                "url" => "https://source.unsplash.com/pe9dvM1rQkM/640x480",
                "name" => "Steak with truffle oil fries",
                "price" => "40,000"
            ],
            [
                "url" => "https://source.unsplash.com/sA3wymYqyaI/640x480",
                "name" => "Spaghetti",
                "price" => "27,000"
            ],
            [
                "url" => "https://source.unsplash.com/3oEcy656LIE/640x480",
                "name" => "Fish curry",
                "price" => "35,000"
            ]
        ];

        $desserts = [
            [
                "url" => "https://source.unsplash.com/s8_7AqkzCWY/640x480",
                "name" => "Cheesecake",
                "price" => "30,000"
            ],
            [
                "url" => "https://source.unsplash.com/dEUyLofZe5o/640x480",
                "name" => "Waffle",
                "price" => "22,500"
            ],
            [
                "url" => "https://source.unsplash.com/ZgRTuPsmFQg/640x480",
                "name" => "Pancake",
                "price" => "27,500"
            ],
            [
                "url" => "https://source.unsplash.com/q54Oxq44MZs/640x480",
                "name" => "Donut",
                "price" => "25,000"
            ],
            [
                "url" => "https://source.unsplash.com/5A0O12BIsjY/640x480",
                "name" => "Ice cream",
                "price" => "20,000"
            ]
        ];

        $beverages = [
            [
                "url" => "https://source.unsplash.com/zyDr8MZf1Bw/640x480",
                "name" => "Green tea",
                "price" => "18,000"
            ],
            [
                "url" => "https://source.unsplash.com/4FujjkcI40g/640x480",
                "name" => "Chocolate milkshake",
                "price" => "25,000"
            ],
            [
                "url" => "https://source.unsplash.com/nzyzAUsbV0M/640x480",
                "name" => "Coffee",
                "price" => "20,000"
            ],
            [
                "url" => "https://source.unsplash.com/FnTWsBohkdo/640x480",
                "name" => "Hot tea",
                "price" => "18,000"
            ],
            [
                "url" => "https://source.unsplash.com/IHKR_A_THW0/640x480",
                "name" => "Coke",
                "price" => "20,000"
            ]
        ];

        return view('/products', compact('carousels', 'breakfast', 'meals', 'desserts', 'beverages'));
    }
}
