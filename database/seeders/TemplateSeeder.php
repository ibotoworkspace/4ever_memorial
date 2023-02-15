<?php

namespace Database\Seeders;

use App\Models\Template;
use App\Models\WebsiteTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template_name = 'template_1';
        WebsiteTemplate::where('name',$template_name)->delete();
        $image_path = asset('/');
        $template = new WebsiteTemplate();
        // $template->id = 1;
        $template->name = $template_name;
        $template->save();
        $template = WebsiteTemplate::where('name',$template_name)->first();

        $template->website_html = '
        <html>

        <head>
            <title>4 Ever Memorial</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <link rel="stylesheet" href="http://localhost/4_ever_memories/public/user_templates/template_1/css/style.css" />

            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        </head>

        <body>
            <section class="nav_back">
                <div class="nav_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo-area">
                                    <img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/logo.png" alt="relative" />
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="nav_bar">
                                    <a href="">SIGN IN</a>
                                    <a href="">CREATE A NEW WEBSITE</a>
                                    <a href="">INVITE OTHERS</a>
                                    <a href="">CONTACT SUPPORT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="cover_head">
                                <h1>{!$!memorial_user.full_name!$!}</h1>
                                <h1>{!$!memorial_user.birth!$!} - {!$!memorial_user.death!$!}</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile_img">
                                <img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/profile_pic.jpg" alt="relative" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="tab_backg"></div>
                <div class="back_sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tab_area">
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, \'About\')" id="defaultOpen">
                                            ABOUT
                                        </button>
                                        <button class="tablinks" onclick="openCity(event, \'Life\')">
                                            LIFE
                                        </button>
                                        <button class="tablinks" onclick="openCity(event, \'gallary\') ,openpic(event, \'photo\')">
                                            gallery
                                        </button>
                                        <button class="tablinks" onclick="openCity(event, \'stories\')">
                                            STORIES
                                        </button>
                                    </div>
                                    {!$!gallary_tributes_main!$!}



                                    {!$!life_main!$!}


                                    <div id="gallary" class="tabcontent">
                                        <div class="reviewBox">

                                            <div class="tab_gal">
                                                <button class="tab_gallinks" onclick="openpic(event, \'photo\')"
                                                    id="defaultOpen">photo</button>
                                                <button class="tab_gallinks" onclick="openpic(event, \'video\')">video</button>
                                                <button class="tab_gallinks" onclick="openpic(event, \'Audio\')">Audio</button>
                                            </div>
                                            {!$!gallary_photos_main!$!}
                                            {!$!gallary_video_main!$!}
                                            {!$!gallary_audio_main!$!}


                                        </div>
                                    </div>
                                    {!$!gallary_stories_main!$!}



                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rightBoxArea familyFriend">
                                    <ul>
                                        <li>
                                            <h3>Invite {!$!memorial_user.name!$!}\'s family and friends</h3>
                                        </li>
                                        <li><i class="fa fa-user-plus" aria-hidden="true"></i></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btnInvite"><i class="fa fa-user-plus"
                                            aria-hidden="true"></i> Invite Now</a>
                                </div>
                                <div class="face_share">
                                    <div class="fb_icon">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </div>
                                    <div class="fb_share_par">
                                        <p>Share on Facebook</p>
                                    </div>
                                </div>
                                <div class="rightBoxArea NotiPref">
                                    <h3>Your notification preferences</h3>
                                    <p>Subscribe to get notified about new additions to this memorial.</p>
                                </div>
                                <div class="phots">
                                    <p class="pht_para">137 Photos</p>
                                    <div class="imag_sec">
                                        <img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/download.jpg" alt="">
                                    </div>
                                </div>
                                <div class="rightBoxArea RecentUpdate">
                                    <h3>Recent updates</h3>
                                    {!$!recent_updates_html_show!$!}
                                </div>
                                <div class="rightBoxArea NotiPref">
                                    <h4>This website is administered by:
                                        {!$!owner_user.name!$!}
                                    </h4>
                                </div>
                                <div class="view_sec">
                                    <div class="flx">
                                        <div class="viw_icon">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </div>
                                        <div class="viw_para">
                                            {!$!total_views!$!} Views
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="flx">

                                        <div class="wrld_icon">
                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                        </div>
                                        <div class="wrld_par"> Open access</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="footer_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sdad">
                                <h5 class="sdads">Follow us:</h5>
                                <div class="social">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="links">
                                <a href="">Memorial Websites</a>
                                <a href="">Affiliate</a>
                                <a href="">Resources</a>
                                <a href="">Terms of Use</a>
                                <a href="">Privacy Policy</a>
                                <a href="">Site Map</a>
                                <a href="">Contact Us</a>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </section>
            <a href="#" class="float">
                <i class="fa fa-chevron-up my-float" aria-hidden="true"></i>
            </a>
        </body>

        </html>

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";

            }
            document.getElementById("defaultOpen").click();
        </script>
        <script>
            function openpic(evt, cityName) {
                var i, tab_galcontent, tab_gallinks;
                tab_galcontent = document.getElementsByClassName("tab_galcontent");
                for (i = 0; i < tab_galcontent.length; i++) {
                    tab_galcontent[i].style.display = "none";
                }
                tab_gallinks = document.getElementsByClassName("tab_gallinks");
                for (i = 0; i < tab_gallinks.length; i++) {
                    tab_gallinks[i].className = tab_gallinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();

        </script>


        ';
      $template->save();
      $template = WebsiteTemplate::where('name',$template_name)->first();

        // $template->website_variable = json_encode('
        // $website_variable = '

        $website_variable = preg_replace( "/<br>|\n/", "", '
        [
            {
              "owner_user": [
                {
                  "id": "03",
                  "name": "Anthony",
                  "full_name": "Anthony Joseph Bouslaiby",
                  "birth": "2004",
                  "death": "2022",
                  "father_name": "Anthony Father",
                  "image": "http://localhost/4_ever_memories/public/user_templates/template_1/images/profile_pic.jpg"
                }
              ],
              "total_views": 90,
              "recent_updates_html_show": "<h5>{!$!date!$!}</h5><ul><li class=\"no-img\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i></li><li class=\"contentLi\">{!$!message!$!}</li></ul>",
              "recent_updates_html_show_values": [
                {
                  "date": "February 2",
                  "type": "tribute",
                  "number": 0
                },
                {
                  "date": "February 3",
                  "type": "photos",
                  "number": 3
                },
                {
                  "date": "February 4",
                  "type": "tribute",
                  "number": 0
                }
              ],
              "memorial_user": {
                "id": "03",
                "name": "Anthony",
                "full_name": "Anthony Joseph Bouslaiby",
                "birth": "2004",
                "death": "2022",
                "father_name": "Anthony Father",
                "image": "http://localhost/4_ever_memories/public/user_templates/template_1/images/profile_pic.jpg"
              },
              "user_memorial_tribute": "<h3 class=\"about_heading\">Let the memory of Anthony be with us forever.</h3><p><ul class=\"li_txt\"><li>18 years old</li><li>Born on September 1, 2004 in San Dimas, California, United States</li><li>Passed away on December 11, 2022 in United States</li></ul></p><p class=\"abt_txt\">This memorial website was created in memory of our beloved son,Anthony Bouslaiby, 18 years old, born on September 1, 2004, and passed away onDecember 11, 2022. He will be with us forever, and we will never stop loving him. Idecided to start this website to celebrate his life. Even though he wasn\'t with us as long as he should\'ve been, he has touched so many lives and was so loved. I hope you all will contribute to this page, with picture, videos, and stories. I was so touched by all the memories left in the memory jar at the luncheon. Please feel free to add more, as they may come to you, because that\'s all we have left once a loved one leaves us. We all appreciate the love you showed Anthony for however long you may have known him. Thank you all!<br> Angela (his mom) <br> P.S. Please let me know if you have any probelms uploading etc. You can click on a  photo to see the caption. </p>",
              "tribute_html":  "<div class=\"reviewBox\"><ul class=\"reviewSection\"> <li><img src=\"{{type}}\"></li> <li> <h3>Maria Nashed</h3> <h5>January 23</h5><p>Anthony was an amazingly sweet friend. After class he would always walk me to my car and then I would drive him to his. We would always have a good time laughing at the way we pronounced Arabic words due to difference in dialect even though he knew little-to-no Arabic at all lol. I also remember how whenever I would ask for help on homework, he would always insist on teaching me how to do the problems fully in order for me to better... <a href=\"#\">read more</a></p> </li></ul></div>",
              "tributes": [
                {
                  "user_id": "03",
                  "user_name_show": "Maria Nashed",
                  "type": "flower",
                  "date_show": "January 23",
                  "details_show": "Anthony was an amazingly sweet friend. After class he would always walk me to my car and then I would drive him to his. We would always have a good time laughing at the way we pronounced Arabic words due to difference in dialect even though he knew little-to-no Arabic at all lol. I also remember how whenever I would ask for help on homework, he would always insist on teaching me how to do the problems fully in order for me to better.",
                  "date": "23/01/1990",
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/profile_pic.jpg"
                },
                {
                  "user_id": 1,
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/candel.png",
                  "user_name_show": "Norice Mazmanian",
                  "type": "candle",
                  "date_show": "January 22",
                  "details_show": "I remember one day after my bone marrow transplant. I was staying at my daughters house while recovering. I think my daughter had to go out and all of a sudden Anthony came to my room and pulled up a chair. No doubt he was told to make sure I didn\'t get out of bed. Anyway we started talking and I asked him about school and what he was learning. I think it was some scientific thing that he started explaining to me.",
                  "date": "23/01/1993"
                },
                {
                  "user_id": 1,
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/candel.png",
                  "user_name_show": "Adriana Villarreal",
                  "type": "candle",
                  "date_show": "January 21",
                  "details_show": "Anthony was such a kind person he never made me feel left out nor ever judged me.",
                  "date": "21/01/1995"
                },
                {
                  "user_id": 1,
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/candel.png",
                  "user_name_show": "Norice Mazmanian",
                  "type": "candle",
                  "date_show": "January 22",
                  "details_show": "Anthony was always precocious and asked every question ever. I loved his need to know more and more and to question. He always made me laugh. My favorite memories are long conversations with him. He could talk. And was so interesting. He was sweet and generous to everyone. He loved being in charge of projects and got any job done always wanting to do more. I miss his voice and laugh and \" yo, Mrs Johnson! You vibing?\" Anthony you will remain in my heart forever.",
                  "date": "21/01/1997"
                }
              ],
              "life": [
                {
                  "user_id": 1,
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/baby_cot.png",
                  "details_show": "Anthony was born in September 1, 2004 via scheduled C-section at San Dimas Community Hospital in San Dimas. He was 8 lbs 10 oz..."
                }
              ],
              "gallery_video": [
                {
                  "user_id": 1,
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/download.jpg"
                }
              ],
              "stories": [
                {
                  "user_id": 1,
                  "user_name_show": "Alexa Zelaya",
                  "date_show": "January 21",
                  "image_show": "http://localhost/4_ever_memories/public/user_templates/template_1/images/baby_cot.png",
                  "details_show": "3rd floor of the library was always our go to if we wanted to study (aka gossip haha.) We shared so many nice chats here and always wanted to reservea study room but we were always too lazy to do that. We\'d find an empty onebut then get kicked out like 10 minutes later after someone who actuallyreserved it came in. All the memories at school hold a special place in myheart. I walk past the places we would hang out and think about everything.I am glad we went from high school to college. I am so grateful I got tospend my first quarter of college with someone as amazing as you, Anthony."
                }
              ]
            }
          ]
        ');
        // ';

        $template->website_variable = json_encode($website_variable);
        $template->save();
        $template = WebsiteTemplate::where('name',$template_name)->first();

        $template->tribute = '
        <div id="About" class="tabcontent">
        {!$!user_memorial_tribute!$!}
        <div class="tributes">
            <h1>Tributes</h1>
            <button class="bt_trei"><i class="fa fa-pencil" aria-hidden="true"></i>_ Leave a
                Tribute</button>
        </div>
        <div class="tribute_blk">
            {!$!tributes!$!}

        </div>
        <div class="lev_tri">
            <h3>Leave a Tribute</h3>
            <div class="icon_list">
                <div class="cand"><img
                        src="{!!asset(\'user_templates/template_1/images/candle_blu.png\')!!}"
                        alt="relative"></div>
                <div class="flower"> <img
                        src="{!!asset(\'user_templates/template_1/images/flower_blu.png\')!!}"
                        alt="relative"></div>
                <div class="feather"><img
                        src="{!!asset(\'user_templates/template_1/images/feather_blu.png\')!!}"
                        alt="relative"></div>
            </div>
            <div class="txt_ara">
                <textarea name="tribute" id="" cols="86" placeholder="Add your tribute here"
                    rows="6"></textarea>
            </div>
            <div class="publish">
                <button class="btn btn-danger pbbttn">Publish</button>
            </div>
        </div>

    </div>
        ';
        $template->save();

    }
}
