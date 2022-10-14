<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
                "name" => "Andy",
                "words" => "Has the best tasted foood I have ever had!",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Ben",
                "words" => "I might have more than I already should, but I just cannot stop having more.",
                "color" => "cinereous"
            ],
            [
                "name" => "Catherine",
                "words" => "The service is well delivered and it truly feels like home.",
                "color" => "richblack"
            ],
            [
                "name" => "Donna",
                "words" => "The atmosphere is so good! At night, I feel like entering another world of fantasy!",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Evan",
                "words" => "The food is great and the place is well kept.",
                "color" => "cinereous"
            ],
            [
                "name" => "Felix",
                "words" => "Yummy!",
                "color" => "richblack"
            ],
            [
                "name" => "Grace",
                "words" => "The place is beautiful and I love the food!",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Hellen",
                "words" => "I love the steak here.",
                "color" => "cinereous"
            ],
            [
                "name" => "Ivan",
                "words" => "Food is great, food is delicious, food is love, food is life~!",
                "color" => "richblack"
            ],
            [
                "name" => "Jason",
                "words" => "Sometimes I wonder what I'm doing with my life, but at least it leads me to this heavenly taste.",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Kiki",
                "words" => "The ingredients used in the food are good and healty for the body. I haven't had any problems with my health since eating here.",
                "color" => "cinereous"
            ],
            [
                "name" => "Layla",
                "words" => "Ice cream is nice when the weather is hot!",
                "color" => "richblack"
            ],
            [
                "name" => "Momo",
                "words" => "I had so much good time with my friends here!",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Nino",
                "words" => "The sound of music acommpanied by the rainfall can never be erased from my mind. I was having a bad day but the warm and tasty spaghetti lifted my mood even in the dreary weather felt better.",
                "color" => "cinereous"
            ],
            [
                "name" => "Olivia",
                "words" => "FOOD! RECOMMENDED! COME HERE WITH MEEEEEEE!",
                "color" => "richblack"
            ],
            [
                "name" => "Patricia",
                "words" => "I will surely miss coming here since I'm gonna move out of the town...",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Quinn",
                "words" => "The desserts here are very delicious.",
                "color" => "cinereous"
            ],
            [
                "name" => "Russel",
                "words" => "I really love the staff here; they all are friendly and very helpful. If you encounter any problems, they are ready to help you.",
                "color" => "richblack"
            ],
            [
                "name" => "Shani",
                "words" => "I and my brother were having one of the best sandwiches we have ever had.",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Tania",
                "words" => "My casual restaurant choice in the city; from the kindness shown, the place, to the food itself are delightful to experience in life.",
                "color" => "cinereous"
            ],
            [
                "name" => "Umar",
                "words" => "Hello from X! I always come here on Saturday to eat breakfast. I really love their baguette!",
                "color" => "richblack"
            ],
            [
                "name" => "Von",
                "words" => "I have never known croissant has some varieties... well, you learn something everyday. Love the taste.",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Willow",
                "words" => "Some nights, I crave for some of ATOZ's sandwiches...",
                "color" => "cinereous"
            ],
            [
                "name" => "Ximena",
                "words" => "The moonlight shone through the windows as the classical music played in the background, stomach contented with some warm noodles and tea. At that moment, I felt I was back in time with my family.",
                "color" => "richblack"
            ],
            [
                "name" => "Yoshua",
                "words" => "To live is to eat! Wait, is it the other way around? Ah whatever, I'm just gonna say the food is great! Especially the noodles!",
                "color" => "dutchwhite"
            ],
            [
                "name" => "Zero",
                "words" => "My stomach is full of curry and is very happy.",
                "color" => "cinereous"
            ]
        ];

        return view('/testimonials', compact('cards'));
    }
}
