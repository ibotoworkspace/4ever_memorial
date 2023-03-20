@extends('user_layout.main_header_footer')
@section('title')
<title>4 ever memorial About-US</title>
@endsection

@section('headerfiles')
<link href="{!!asset('theme/user_theme/css/aboutus.css')!!}" rel="stylesheet">
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
                            <p>Our success story is attributed to the great confidence
                                bestow on us by our various students; because we know
                                that your success in your career path is ultimately our
                                success as an organization.</p>
                            <p>We derive joy and excitement in helping you choose your
                                desire career path through our hands on training and
                                human capacity development platforms gear towards
                                your success.</p>
                            <p>Our passion is to equip the next generation of
                                professionals; using the right technological information.</p>
                            <p>With proficient years of experience as trainers in various
                                IT training and capacity development. We strive to bring
                                out the best in you.</p>
                            <img src="{!!asset('theme/user_theme/images/signature.png')!!}" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="aboutimg">
                            <img src="{!!asset('theme/user_theme/images/jacob.png')!!}" class="img-responsive">
                        </div>
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
                            <img src="{!!asset('theme/user_theme/images/mission.jpg')!!}" class="img-responsive">
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
                            <img src="{!!asset('theme/user_theme/images/vision.jpg')!!}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection


    