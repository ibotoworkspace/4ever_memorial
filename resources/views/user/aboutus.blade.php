@extends('user_layout.main_header_footer')
@section('title')
<title>4 ever memorial About-US</title>
@endsection

@section('headerfiles')
<link href="{!!asset('public/theme/user_theme/css/aboutus.css')!!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="abouttopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>ABOUT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="aboutarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="aboutdata">
                            <h2>ABOUT US</h2>
                            <p>4Ever Memorials is a website that provides an online platform for families and friends to commemorate the lives of their loved ones in a respectful and meaningful way. Our website allows users to create virtual memorials with detailed tribute pages, share photos and videos, light digital candles, and more. It serves as a place for people to come together to console one another, pay respects, remember fondly, offer condolences, and celebrate life. We are committed to providing an accessible space for those who have been affected by loss or grief, allowing them to honor the memory of their loved ones as they move forward in their healing process. Forever Memorial strives to be a source of comfort through difficult times and bring peace of mind during challenging circumstances. Our site will remain a constant reminder of the beauty that exists despite loss and provide a safe haven for ongoing reflection. Through Forever Memorial, we seek to make a lasting impact on our community by providing an easy way to create meaningful tributes in memory of those who left us too soon. We hope you will join us in honoring their memories. 

                                    At 4Eever Memorial, we understand that grief is personal and unique for everyone, so we strive to offer customizable memorials tailored to each individual’s needs.

                                </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="aboutimg">
                            <img src="{!!asset('public/theme/user_theme/images/jacob.png')!!}" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="aboutdata">

                    <p>
                    With this in mind, users are able to customize their own memorial pages with photos, videos, music, or writings of their choice. Additionally, users can add interactive features such as stories about the deceased, condolence cards, and support messages from visitors. Our virtual memorials are carefully designed to help family and friends honor the lives of their loved ones in a respectful and meaningful way. 

Our website also offers several ways for people to stay connected with those they have lost, even after death. Through our memorial pages, users can post messages on the page’s message boards, comment on shared photos and videos, light digital candles and even create virtual flower tributes. We strive to make Forever Memorial easily accessible so that anyone affected by grief or loss can join in honoring the memories of their beloved family members or friends. 

4Ever Memorial is dedicated to providing a comfortable space for people suffering from grief or loss. Our team works relentlessly to ensure that this website continues to be a source of comfort and healing for all of its users. We would be honored if you choose to join us in honoring the memories of those we have lost. Thank you for taking the time to visit our website, and we hope it brings peace and comfort during this difficult time. 

4Ever Memorial: a safe haven for ongoing reflection. An everlasting tribute to lost loved ones. A place to remember and keep their memories alive. Always by your side, even after death. Come pay tribute to us today at 4Ever Memorial.
</p>
<img src="{!!asset('public/theme/user_theme/images/signature.png')!!}" class="img-responsive">
                </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="aboutareaa">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="aboutimg">
                            <img src="{!!asset('public/theme/user_theme/images/mission.jpg')!!}" class="img-responsive">
                        </div>
                        <div class="aboutdataa">
                            <h2>VISION</h2>
                            <p>The vision of Iboto Empire: The inspiration, the
                                training and the equipping of the next generation
                                of professionals: using the right tools and the
                                right technological information within their
                                vocational fields; in order to create a lasting,
                                powerful, and global impact-not only for today,
                                but for generations to come.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="aboutdataa">
                            <h2>MISSION</h2>
                            <p>Our mission is to create and build human
                                strategic capacity solutions; solutions that not
                                only promote self-improvement, but that also
                                advance individual development- thus enabling
                                individuals to achieve their set goals and
                                objectives within their chosen career paths.</p>
                        </div>
                        <div class="aboutimg">
                            <img src="{!!asset('public/theme/user_theme/images/vision.jpg')!!}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection


    