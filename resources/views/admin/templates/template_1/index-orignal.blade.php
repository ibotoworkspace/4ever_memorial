<html>

<head>
    <title>4 Ever Memorialacascascas</title>
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
    <link rel="stylesheet" href="{!! asset('user_templates/template_1/css/style.css') !!}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <section class="nav_back">
        <style>
            .nav_back {
                background-image: url(http://localhost/4_ever_memories/public/user_templates/template_1/images/cover.png);
            }
        </style>
        <div class="nav_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-area">
                            <img src="{!! asset('user_templates/template_1/images/logo.png') !!}" class="img-fluid" alt="relative" />
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
                        <h1>Anthony Joseph Bouslaiby</h1>
                        <h1>2004 - 2022</h1>
                    </div>
                </div>
                <div class="col-md-4 prf_img">
                    <div class="profile_img">
                        <img src="{!! asset('user_templates/template_1/images/profile_pic.jpg') !!}" alt="relative" />
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
                                <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">
                                    ABOUT
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'Life')">
                                    LIFE
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'Gallary') ,openpic(event, 'photo')">
                                    GALLERY
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'stories')">
                                    STORIES
                                </button>
                            </div>
                            <div id="About" class="tabcontent">

                                <h3 class="about_heading">Let the memory of Anthony be with us forever.</h3>
                                <p>
                                <ul class="li_txt">
                                    <li>18 years old</li>
                                    <li>Born on September 1, 2004 in San Dimas, California, United States</li>
                                    <li>Passed away on December 11, 2022 in United States</li>
                                </ul>
                                </p>

                                <p class="abt_txt">This memorial website was created in memory of our beloved son,
                                    Anthony Bouslaiby, 18 years old, born on September 1, 2004, and passed away on
                                    December 11, 2022. He will be with us forever, and we will never stop loving him. I
                                    decided to start this website to celebrate his life. Even though he wasn't with us
                                    as long as he should've been, he has touched so many lives and was so loved. I hope
                                    you all will contribute to this page, with picture, videos, and stories. I was so
                                    touched by all the memories left in the memory jar at the luncheon. Please feel free
                                    to add more, as they may come to you, because that's all we have left once a loved
                                    one leaves us. We all appreciate the love you showed Anthony for however long you
                                    may have known him. Thank you all!
                                    <br>
                                    Angela (his mom)
                                    <br>
                                    P.S. Please let me know if you have any probelms uploading etc. You can click on a
                                    photo to see the caption.
                                </p>
                                <div class="tributes">
                                    <h1>Tributes</h1>
                                    <button class="bt_trei"><i class="fa fa-pencil" aria-hidden="true"></i>_ Leave a
                                        Tribute</button>
                                </div>
                                <div class="tribute_blk">
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection">
                                            <li>
                                                <img src="{!! asset('user_templates/template_1/images/imgs/flower.png') !!}">
                                            </li>
                                            <li>
                                                <h3>Maria Nashed</h3>
                                                <h5>January 23</h5>
                                                <p>Anthony was an amazingly sweet friend. After class he would always
                                                    walk me to my car and then I would drive him to his. We would always
                                                    have a good time laughing at the way we pronounced Arabic words due
                                                    to difference in dialect even though he knew little-to-no Arabic at
                                                    all lol. I also remember how whenever I would ask for help on
                                                    homework, he would always insist on teaching me how to do the
                                                    problems fully in order for me to better... <a href="#">read
                                                        more</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection">
                                            <li>
                                                <img src="{!! asset('user_templates/template_1/images/imgs/flower.png') !!}">
                                            </li>
                                            <li>
                                                <h3>Maria Nashed</h3>
                                                <h5>January 23</h5>
                                                <p>Anthony was an amazingly sweet friend. After class he would always
                                                    walk me to my car and then I would drive him to his. We would always
                                                    have a good time laughing at the way we pronounced Arabic words due
                                                    to difference in dialect even though he knew little-to-no Arabic at
                                                    all lol. I also remember how whenever I would ask for help on
                                                    homework, he would always insist on teaching me how to do the
                                                    problems fully in order for me to better... <a href="#">read
                                                        more</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection" id="reviewSection">
                                            <li>
                                                <img src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}">
                                            </li>
                                            <li>
                                                <h3>Norice Mazmanian</h3>
                                                <h5>January 22</h5>
                                                <p>I remember one day after my bone marrow transplant. I was staying at
                                                    my daughters house while recovering. I think my daughter had to go
                                                    out and all of a sudden Anthony came to my room and pulled up a
                                                    chair. No doubt he was told to make sure I didn't get out of bed.
                                                    Anyway we started talking and I asked him about school and what he
                                                    was learning. I think it was some scientific thing that he started
                                                    explaining to me. I was in awe of the way he.... <a
                                                        href="#">read more</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection">
                                            <li>
                                                <img src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}">
                                            </li>
                                            <li>
                                                <h3>Adriana Villarreal</h3>
                                                <h5>January 21</h5>
                                                <p>Anthony was such a kind person he never made me feel left out nor
                                                    ever judged me</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection">
                                            <li>
                                                <img src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}">
                                            </li>
                                            <li>
                                                <h3>Wendi Johnson</h3>
                                                <h5>January 21</h5>
                                                <p>Anthony was always precocious and asked every question ever. I loved
                                                    his need to know more and more and to question. He always made me
                                                    laugh. My favorite memories are long conversations with him. He
                                                    could talk. And was so interesting. He was sweet and generous to
                                                    everyone. He loved being in charge of projects and got any job done
                                                    always wanting to do more. I miss his voice and laugh and " yo, Mrs
                                                    Johnson! You vibing?" Anthony you will remain in my heart forever.
                                                    Love Mrs Johnson. Wendi.... <a href="#">read more</a></p>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="lev_tri">

                                    <input type="hidden" id="type_tribute" name="type_tribute">
                                    <h3>Leave a Tribute</h3>
                                    <div class="icon_list">
                                        <button onclick="set_tribute('flower')" class="bt_no">
                                            <div class="cand same">
                                                <div class="ico_wri">
                                                    <img src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}" alt="relative">
                                                    <span class="sp">Light a Candle</span>
                                                </div>
                                            </div>
                                        </button>
                                        <button class="bt_no">
                                            <div class="flower same">
                                                <div class="ico_wri">
                                                    <img src="{!! asset('user_templates/template_1/images/imgs/flower.png') !!}" alt="relative">
                                                    <span class="sp">Lay a Flower</span>
                                                </div>
                                            </div>
                                        </button>
                                        <button class="bt_no">
                                            <div class="feather same">
                                                <div class="ico_wri">
                                                    <img src="{!! asset('user_templates/template_1/images/imgs/feather.png') !!}" alt="relative">
                                                    <span class="sp">Leave a Note</span>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="txt_ara">
                                        <textarea name="tribute" id="" cols="86" placeholder="Add your tribute here" rows="6"></textarea>
                                    </div>
                                    <div class="publish">
                                        <button class="btn btn-danger pbbttn">Publish</button>
                                    </div>
                                </div>

                            </div>

                            <div id="Life" class="tabcontent">
                                <div class="reviewBox">
                                    <div class="newTag">
                                        <span class="badge badge-secondary">New</span>
                                    </div>
                                    <ul class="reviewSection">

                                        <li>
                                            <h3>Anthony’s Birth</h3>
                                        </li>
                                    </ul>
                                    <div class="baby">
                                        <img src="{!! asset('user_templates/template_1/images/baby_cot.png') !!}" alt="">
                                    </div>
                                    <p class="fdgsdf">Anthony was born in September 1, 2004 via scheduled C-section at
                                        San Dimas Community Hospital in San Dimas. He was 8 lbs 10 oz..</p>
                                    <div class="whole">
                                        <div class="flx">
                                            <div class="share">
                                                <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                            </div>
                                            <div class="chr_p">
                                                Share
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Gallary" class="tabcontent">
                                <div class="reviewBox">

                                    <div class="tab_gal">
                                        <button class="tab_gallinks" onclick="openpic(event, 'photo')"
                                            id="defaultOpen">photo</button>
                                        <button class="tab_gallinks" onclick="openpic(event, 'video')">video</button>
                                        <button class="tab_gallinks" onclick="openpic(event, 'Audio')">Audio</button>
                                    </div>

                                    <div id="photo" class="tab_galcontent">
                                        <div class="flx">
                                            <div class="gall_top_bttn">
                                                <div class="flx">
                                                    <div class="ply_bttn">
                                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="slidsho_txt">
                                                        <p>Start slideshow</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gall_top_bttn">
                                                <div class="flx">
                                                    <div class="ply_bttn">
                                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="slidsho_txt" style="display: grid">
                                                        {{-- <p>Add a Photo</p> --}}
                                                        <label for="file_upload" class="custom-file-upload">
                                                            Add a Photo
                                                        </label>
                                                        <input type="file" id="file_upload" class="upld_file" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>






                                    </div>

                                    <div id="video" class="tab_galcontent">
                                        <div class="flx">

                                            <div class="gall_top_bttn">
                                                <div class="flx">
                                                    <div class="ply_bttn">
                                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="slidsho_txt">
                                                        <p>Add Video</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>







                                    </div>

                                    <div id="Audio" class="tab_galcontent">
                                        <div class="audio_icon">
                                            <i class="fa fa-microphone" aria-hidden="true"></i>
                                        </div>

                                        <div class="add_audio">
                                            <div class="aud_head">
                                                Add Audio
                                            </div>
                                            <div class="aud_box">
                                                <label for="file_upload" class="custom-file-upload">
                                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                </label>
                                                <input type="file" onselect="" id="audio_upload" class="upld_audio" >
                                                
                                                <p>From Your Device</p>

                                            </div>

                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div id="stories" class="tabcontent">
                                <div class="add_stor">
                                    <div class="flx">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8">

                                                    <p>Share a special moment from Anthony's life</p>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="stor_bttn">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>_Write a story
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="story_tab">
                                    <p>
                                        January 21 . by Alexa Zelaya</p>
                                    <img src="{!! asset('user_templates/template_1/images/baby_cot.png') !!}" alt="relative">
                                    <div class="story_para">
                                        <p>3rd floor of the library was always our go to if we wanted to "study" (aka
                                            gossip haha.) We shared so many nice chats here and always wanted to reserve
                                            a study room but we were always too lazy to do that. We'd find an empty one
                                            but then get kicked out like 10 minutes later after someone who actually
                                            reserved it came in. All the memories at school hold a special place in my
                                            heart. I walk past the places we would hang out and think about everything.
                                            I am glad we went from high school to college. I am so grateful I got to
                                            spend my first quarter of college with someone as amazing as you, Anthony.
                                        </p>
                                        <div class="whole">
                                            <div class="flx">
                                                <div class="share">
                                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                                </div>
                                                <div class="chr_p">
                                                    Share
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="story_add">
                                    <div class="contaiasner">
                                        <div class="row">
                                            <div class="share_story">
                                                <div class="heddd">
                                                    <h2>Share a story</h2>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="str_title">
                                                        <input type="text" class="form-control"
                                                            name="story_title_n" id="story_title"
                                                            placeholder="Title (Optional)">
                                                    </div>
                                                    <div class="str_textaea">
                                                        <textarea class="form-control" name="story_details_n" rows="5" id="story_details"></textarea>
                                                    </div>
                                                    <div class="by">
                                                        <div class="dropdown">
                                                            by ameer maavia<button class="dpbtn dropdown-toggle"
                                                                type="button" data-toggle="dropdown">Change<span
                                                                    class=""></span></button>
                                                            <ul class="dropdown-menu dp_menue">
                                                                <li><a href="#">I am the author </a></li>
                                                                <li><a href="#">Posting on behalf of another
                                                                        person </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="attach">
                                                        <div class="attch_hed">
                                                            Attach a picture or video (optional):
                                                        </div>

                                                        <div class="attch_icon_area">
                                                            <div class="attch_icon">
                                                                <label for="upload-photo"><i
                                                                        class="fa fa-cloud-upload"
                                                                        aria-hidden="true"></i></label>
                                                                <input type="file" name="photo"
                                                                    id="upload-photo" class="up_ld_file" />
                                                                <p>Upload From Your Device</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="publ_btn">
                                                        <button id="save_story"
                                                            class="btn btn-danger">Publish</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>






                        </div>
                    </div>
                    <div class="col-md-4 side_area">
                        <div class="rightBoxArea familyFriend">
                            <ul>
                                <li>
                                    <h3>Invite Anthony's family and friends</h3>
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

                                <div class="contain side_slider">
                                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" style="width:100%; height: 100%;">
                                            </div>

                                            <div class="item">
                                                <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" style="width:100%; height: 100%;">
                                            </div>

                                            <div class="item">
                                                <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" style="width:100%; height: 100%;">
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="rightBoxArea RecentUpdate">
                            <h3>Recent updates</h3>
                            <h5>Yesterday</h5>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                            <h5>January 23</h5>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                            <ul>
                                <li class="no-img"><i class="fa fa-picture-o" aria-hidden="true"></i></li>
                                <li class="contentLi">Vivi Armenta added 5 photos.</li>
                            </ul>
                        </div>
                        <div class="rightBoxArea NotiPref">
                            <h4>This website is administered by:
                                Angela Bouslaiby
                            </h4>
                        </div>
                        <div class="view_sec">
                            <div class="flx">
                                <div class="viw_icon">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="viw_para">
                                    920 Views
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
        evt.currentTarget.className += " activ";
    }
    document.getElementById("defaultOpen").click();
</script>
