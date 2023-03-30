<?php

namespace Database\Seeders;

use App\Models\Styling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StylingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image_path = asset('public').'/';
        $server = 'https://demo.hatinco.com/4_ever_memories/public';
        $public_path = 'https://stagging.hatinco.com/4_ever_memories/public/';

        $template_name_arr = ['template_1','template_2','template_3','template_4'];
        $default_template = 'template_1';

        foreach ($template_name_arr as $template_name_css_path) {
            Styling::where('name',$template_name_css_path)->delete();
  
            $style = new Styling();
            $style->name = $template_name_css_path;
            $style->css_files = $public_path . 'user_templates/' . $template_name_css_path . '/css/style.css';
            $style->template_image = $public_path . 'user_templates/slider/image/'. $template_name_css_path.'.png';

            $web_variable = '
            {
                "owner_user_var": {
                    "id": "03",
                    "name_var": "Anthony",
                    "full_name_var": "Anthony Joseph Bouslaiby",
                    "birth_var": "2004",
                    "death_var": "2022",
                    "father_name_var": "Anthony Father",
                    "image_var": "' . $public_path . 'user_templates/' . $default_template . '/images/profile_pic.jpg"
                },
                "total_views_var": 90,
                "recent_updates_show_arr": [{
                        "date_var": "February 2",
                        "type_var": "tribute",
                        "number_var": 1,
                        "message_var": "added 1 tribute"
                    },
                    {
                        "date_var": "February 3",
                        "type_var": "photos",
                        "number_var": 3,
                        "message_var": "added 3 photos"
                    },
                    {
                        "date_var": "February 4",
                        "type_var": "tribute",
                        "number_var": 2,
                        "message_var": "added 2 tributes"
                    }
                ],
                "icon_list_var": {
        
                    "flower_image_var": "' . $public_path . 'user_templates/' . $default_template . '/images/flower_blu.png",
                    "candel_image_var": "' . $public_path . 'user_templates/' . $default_template . '/images/candle_blu.png",
                    "feather_image_var": "' . $public_path . 'user_templates/' . $default_template . '/images/feather_blu.png"
                },
                "memorial_user_var": {
                    "id": "03",
                    "name_var": "Anthony",
                    "full_name_var": "Anthony Joseph Bouslaiby",
                    "birth_var": "2004",
                    "death_var": "2022",
                    "father_name_var": "Anthony Father",
                    "image_var": "' . $public_path . 'user_templates/' . $default_template . '/images/profile_pic.jpg"
                },
                "memorial_style_var": {
                    "style_script_var": "' . $public_path . 'user_templates/' . $template_name_css_path . '/css/style.css"
                },
                "tributes_arr": [{
                        "user_name_show_var": "Maria Nashed",
                        "type_var": "flower",
                        "date_show_var": "January 23",
                        "details_show_var": "Anthony was an amazingly sweet friend. After class he would always walk me to my car and then I would drive him to his. We would always have a good time laughing at the way we pronounced Arabic words due to difference in dialect even though he knew little-to-no Arabic at all lol. I also remember how whenever I would ask for help on homework, he would always insist on teaching me how to do the problems fully in order for me to better.",
                        "date_var": "23/01/1990",
                        "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/flower.png"
                    },
                    {
                        "user_id": 1,
                        "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/candel.png",
                        "user_name_show_var": "Norice Mazmanian",
                        "type_var": "candle",
                        "date_show_var": "January 22",
                        "details_show_var": "I remember one day after my bone marrow transplant. I was staying at my daughters house while recovering. I think my daughter had to go out and all of a sudden Anthony came to my room and pulled up a chair. No doubt he was told to make sure I didnot get out of bed. Anyway we started talking and I asked him about school and what he was learning. I think it was some scientific thing that he started explaining to me.",
                        "date_var": "23/01/1993"
                    },
                    {
                        "user_id": 1,
                        "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/candel.png",
                        "user_name_show_var": "Adriana Villarreal",
                        "type_var": "candle",
                        "date_show_var": "January 21",
                        "details_show_var": "Anthony was such a kind person he never made me feel left out nor ever judged me.",
                        "date_var": "21/01/1995"
                    },
                    {
                        "user_id": 1,
                        "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/candel.png",
                        "user_name_show_var": "Norice Mazmanian",
                        "type_var": "candle",
                        "date_show_var": "January 22",
                        "details_show_var": "Anthony was always precocious and asked every question ever. I loved his need to know more and more and to question. He always made me laugh. My favorite memories are long conversations with him. He could talk. And was so interesting. He was sweet and generous to everyone. He loved being in charge of projects and got any job done always wanting to do more. I miss his voice and laugh and \" yo, Mrs Johnson! You vibing?\" Anthony you will remain in my heart forever.",
                        "date_var": "21/01/1997"
                    }
                ],
                "life_tab_arr": [{
                    "user_id": 1,
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/baby_cot.png",
                    "details_show_var": "Anthony was born in September 1, 2004 via scheduled C-section at San Dimas Community Hospital in San Dimas. He was 8 lbs 10 oz..."
                }],
                "gallery_photo_arr": [{
                    "user_id": 1,
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/download.jpg"
                }],
                "gallery_audio_arr": [{
                    "user_id": 1,
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/download.jpg"
                }],
                "gallery_video_arr": [{
                    "user_id": 1,
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/download.jpg"
                }],
                "slider_arr": [{
                    "num_var": 137,
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/download.jpg"
                }],
                "story_tab_arr": [{
                    "user_id": 1,
                    "user_name_show_var": "Alexa Zelaya",
                    "date_show_var": "January 21",
                    "image_show_var": "' . $public_path . 'user_templates/' . $default_template . '/images/baby_cot.png",
                    "details_show_var": "3rd floor of the library was always our go to if we wanted to study (aka gossip haha.) We shared so many nice chats here and always wanted to reservea study room but we were always too lazy to do that. We had find an empty onebut then get kicked out like 10 minutes later after someone who actuallyreserved it came in. All the memories at school hold a special place in myheart. I walk past the places we would hang out and think about everything.I am glad we went from high school to college. I am so grateful I got tospend my first quarter of college with someone as amazing as you, Anthony."
                }]
            }
            ';


            $style->web_variable = $web_variable;
            $style->save();
        }
    }
}
