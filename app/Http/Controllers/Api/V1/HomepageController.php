<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function mock()
    {
        return empty_response();
    }
    
    public function mockArray()
    {
        return empty_array_response();
    }
    
    public function countries()
    {
        $countries = [
           [
                'id' => 1,
                'name' => 'Indonesia',
                'country_code' => '62'
           ],
           [
                'id' => 2,
                'name' => 'Malaysia',
                'country_code' => '60'
           ],
        ];

        return data_response($countries);
    }
    
    public function register()
    {
        $token = '1|y9faCyaV2ROsWYHRe8UEuIR857DRXgILyH70N1FA';

        return data_response(['access_token' => $token]);
    }
    
    public function otp()
    {
        $count = 1;

        return data_response(['resend_count' => $count]);
    }
    
    public function subscription()
    {
        $data = [
            "status"        => "paid",
            "expired_date"  => "2000-07-27T00:00:00.000000Z",
            "platform"      => "android"
        ];

        return data_response($data);
    }
    
    public function profile()
    {
        $data = [
            "photo" => "https://picsum.photos/200", 
            "first_name" => "John", 
            "last_name" => "Doe", 
            "email" => "johndoe@gmail.com", 
            "phone_code" => "62", 
            "phone_number" => "88888888888", 
            "country_id" => 1, 
            "address" => "Jln. Street" 
        ];

        return data_response($data);
    }
    
    public function workouts()
    {
        $data = [
            [
                "id" => 1, 
                "period" => "September 2022", 
                "title" => "Advanced Home September 2022", 
                "info" => [
                    "title" => "CFP Works if you make it work", 
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit." 
                ], 
                "workouts" => [
                    [
                        "id" => 1, 
                        "thumbnail" => "https://picsum.photos/200", 
                        "name" => "Workout 1 - Split", 
                        "duration" => "45 Minutes",
                    ]
                ],
            ],
            [
                "id" => 2, 
                "period" => "August 2022", 
                "title" => "Advanced Home August 2022", 
                "info" => [
                    "title" => "CFP Works if you make it work", 
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit." 
                ], 
                "workouts" => [
                    [
                        "id" => 2, 
                        "thumbnail" => "https://picsum.photos/200", 
                        "name" => "Workout 2 - Split", 
                        "duration" => "54 Minutes",
                    ]
                ],
            ],
        ];

        return data_response($data);
    }
    
    public function workoutsDetail()
    {
        $data = [
            "id" => 1, 
            "name" => "Workout 1 - Split", 
            "info_description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", 
            "duration" => "30 Minutes", 
            "focus_area" => [
                [
                    "id" => 1, 
                    "name" => "Abs",
                ],
                [
                    "id" => 2, 
                    "name" => "Booty",
                ],
                [
                    "id" => 3, 
                    "name" => "Chest",
                ],
            ], 
            "workouts" => [
                "id" => 1, 
                "thumbnail" => "https://picsum.photos/200", 
                "name" => "Warmp Up too", 
                "duration" => "8 Minutes", 
                "parts" => [
                    [
                        "id" => 1, 
                        "name" => "Part 1", 
                        "rounds" => "2 Round", 
                        "rests" => "30” Rest", 
                        "items" => [
                            [
                                "id" => 1, 
                                "name" => "x10 Tower Back", 
                                "training_type" => "Per Foot", 
                                "video_url" => "https://www.youtube.com/watch?v=6Mo2rOZdFq0", 
                                "gif_url" => "https://media.giphy.com/media/zIOdLMZDcBDc2gk6vV/giphy.gif", 
                                "equipment" => [
                                    [
                                        "id" => 1, 
                                        "name" => "Dumble", 
                                        "thumbnail" => "blob:https://www.figma.com/a8873e6d-8144-4fc9-b4e2-e18ef78b2cd3", 
                                        "description" => "Quis elit lorem pretium vehicula risus pretium." 
                                    ],
                                    [
                                        "id" => 2, 
                                        "name" => "Ellastic Band", 
                                        "thumbnail" => "blob:https://www.figma.com/9d71a646-b722-4550-919b-dcddc1264acc", 
                                        "description" => "Quis elit lorem pretium vehicula risus pretium." 
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ], 
            "period" => "September 2022", 
            "title" => "Advanced Home September 2022", 
            "info" => [
                "title" => "CFP Works if you make it work", 
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit." 
            ], 
            "equipment" => [
                [
                    "id" => 1, 
                    "name" => "Dumble", 
                    "thumbnail" => "blob:https://www.figma.com/a8873e6d-8144-4fc9-b4e2-e18ef78b2cd3", 
                    "description" => "Quis elit lorem pretium vehicula risus pretium." 
                ],
                [
                    "id" => 2, 
                    "name" => "Ellastic Band", 
                    "thumbnail" => "blob:https://www.figma.com/9d71a646-b722-4550-919b-dcddc1264acc", 
                    "description" => "Quis elit lorem pretium vehicula risus pretium." 
                ],
            ],
        ];

        return data_response($data);
    }
    
    public function videos()
    {
        $data = [
            [
                "id" => 1, 
                "thumbnail" => "https://picsum.photos/200", 
                "name" => "Kick back leg folded in quadrupedal and variants", 
                "date" => "2000-07-27T00:00:00.000000Z", 
                "is_favorite" => true,
            ],
            [
                "id" => 2, 
                "thumbnail" => "https://picsum.photos/200", 
                "name" => "Kick back leg folded in quadrupedal and variants", 
                "date" => "2000-07-27T00:00:00.000000Z", 
                "is_favorite" => false,
            ],
        ];

        return data_response($data);
    }
    
    public function videosDetail()
    {
        $data = [
            "id" => 1, 
            "video_url" => "https://www.youtube.com/watch?v=6Mo2rOZdFq0", 
            "name" => "Kick back leg folded in quadrupedal and variants", 
            "date" => "2000-07-27T00:00:00.000000Z", 
            "is_favorite" => false ,
        ];

        return data_response($data);
    }
    
    public function live()
    {
        $data = [
            "source" => "https://st1.zoom.us/zoom.ico", 
            "link" => "https://us04web.zoom.us/j/71009074706?pwd=jjuSgjwdnKT7kZE7foDFF2EshgaoaF.1", 
            "thumbnail" => "blob:https://www.figma.com/0e0d6b5a-e44b-48d3-82a5-6379446e2dba", 
            "title" => "Workout Friday Live Session" 
        ];

        return data_response($data);
    }
    
    public function blogs()
    {
        $data = [
            [
                "id" => 1, 
                "thumbnail" => "https://picsum.photos/200", 
                "date" => "2000-07-27T00:00:00.000000Z", 
                "title" => "Fit bounty with 3 Ingridients", 
                "tag" => "Healthy Recipes" 
            ],
            [
                "id" => 2, 
                "thumbnail" => "https://picsum.photos/200", 
                "date" => "2000-09-27T00:00:00.000000Z", 
                "title" => "It works if you make it work", 
                "tag" => "Healthy Recipes" 
            ],
         ];

        return data_response($data);
    }
    
    public function blogsDetail()
    {
        $data =[
            "id" => 1, 
            "image" => "https://picsum.photos/200", 
            "date" => "2000-07-27T00:00:00.000000Z", 
            "title" => "Fit bounty with 3 Ingridients", 
            "description" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Enim risus ultrices faucibus sed arcu sed. Diam, erat mattis diam nisi, nam neque,
                ut eget odio. Non ipsum dolor tellus fusce ornare molestie gravida viverra aliquam.
                Lectus nulla amet tempus amet, adipiscing scelerisque platea habitant. 
                Ridiculus cursus id a aliquet mauris, dolor sed quam. 
                Proin dolor fermentum euismod ut aliquam, amet pharetra tristique in. 
                Proin vel rhoncus pellentesque vestibulum. Nibh pharetra felis nunc, 
                vitae ut nisi leo interdum. Tortor et dolor velit nisl, 
                porttitor in ut faucibus fermentum. Sagittis justo orci, montes, amet commodo.
                Diam urna, orci, aliquam, dictumst sed. Nunc semper massa eget tortor, est sit. 
                Tellus, neque, quis erat lacus laoreet nunc. 
                Fringilla dolor ultrices magna ullamcorper amet. 
                Sed in pretium hendrerit sed etiam nulla consectetur in tempus. 
                Facilisis bibendum adipiscing elit, nisi, nec mi. Dui elit, arcu sed imperdiet. 
                Ut vestibulum sed lectus dignissim elementum lorem convallis. 
                Ac nulla blandit pretium ipsum eget eu eget varius. 
                Aenean urna commodo ac sollicitudin at eleifend. 
                Lacus odio molestie cursus ullamcorper metus auctor eu quam.</p>", 
            "tag" => "Healthy Recipes" 
        ];

        return data_response($data);
    }
    
    public function favorites()
    {
        $countries = [
            [
                "id" => 1, 
                "thumbnail" => "https://picsum.photos/200", 
                "name" => "Kick back leg folded in quadrupedal and variants", 
                "date" => "2000-07-27T00:00:00.000000Z", 
                "is_favorite" => true,
            ],
         ]; 

        return data_response($countries);
    }
}
