{{-- {!!dd($memorials)!!} --}}
@extends('user_layout.main_header_footer')
@section('title')
    <title>4 ever memorial</title>
@endsection

@section('body')
    <section>
        <div class="topbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata">
                            <img src="{!! asset('public/theme/user_theme/images/icon.png') !!}" class="img-responsive">
                            <h1>4 EVER MEMORY</h1>
                            <h2>Beautiful, Free Online Memorials & Tributes</h2>
                            <h3>4Ever Virtual Cemetery online tributes are a simple way <br>
                                to preserve, celebrate and share a loved one's legacy.</h3>
                            <a class="btn btn-primary banclick" href="{!! asset('user/memorialform') !!}">
                                Click here to create a memorial
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="hed_area">
                    <h3>
                        {{-- RECENT ONLINE MEMORIALS --}}
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class=""></div>

                <!--Item slider text-->

                <div class="container">
                    <div class="row" id="slider-text">
                        <div class="col-md-6 aboutdata">
                            <h2>RECENT ONLINE MEMORIALS</h2>
                        </div>
                    </div>
                </div>

                <!-- Item slider-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                                <div class="carousel-inner">
                                    @foreach ($memorials as $m)
                                        <div class="item active">
                                            <a href="{!! asset('user/get_memorial/' . $m->email) !!}">
                                                <div class="col-xs-12 col-sm-6 col-md-2">
                                                    <a href="{!! asset('user/get_memorial/' . $m->email) !!}"><img src="{!! asset($m->image_show_var) !!}"
                                                            class="img-responsive center-block"></a>
                                                    <h4 class="text-center">
                                                        {!! ucwords($m->f_name) !!}{!! ucwords($m->m_name) !!}{!! ucwords($m->l_name) !!}
                                                    </h4>
                                                    <h5 class="text-center">{!! ucwords($m->b_year) !!} -
                                                        {!! ucwords($m->p_year) !!} </h5>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>

                                <div id="slider-control">
                                    <a class="left carousel-control" href="#itemslider" data-slide="prev"><img
                                            src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png"
                                            alt="Left" class="img-responsive"></a>
                                    <a class="right carousel-control" href="#itemslider" data-slide="next"><img
                                            src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png"
                                            alt="Right" class="img-responsive"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item slider end-->
                <br /><br />
                <footer class="bg-info">
                    <p class="text-center">
                        <a href="{!! asset('search/memorialss/') !!}" target="_blank">View More.....</a>
                    </p>
                </footer>
                <style>
                    #slider-text {
                        padding-top: 40px;
                        display: block;
                    }

                    #slider-text .col-md-6 {
                        overflow: hidden;
                    }

                    #slider-text h2 {
                        font-family: 'Josefin Sans', sans-serif;
                        font-weight: 400;
                        font-size: 30px;
                        letter-spacing: 3px;
                        margin: 30px auto;
                        padding-left: 40px;
                    }

                    #slider-text h2::after {
                        border-top: 2px solid #c7c7c7;
                        content: "";
                        position: absolute;
                        bottom: 35px;
                        width: 100%;
                    }

                    #itemslider h4 {
                        font-family: 'Josefin Sans', sans-serif;
                        font-weight: 400;
                        font-size: 12px;
                        margin: 10px auto 3px;
                    }

                    #itemslider h5 {
                        font-family: 'Josefin Sans', sans-serif;
                        font-weight: bold;
                        font-size: 12px;
                        margin: 3px auto 2px;
                    }

                    #itemslider h6 {
                        font-family: 'Josefin Sans', sans-serif;
                        font-weight: 300;
                        ;
                        font-size: 10px;
                        margin: 2px auto 5px;
                    }

                    .badge {
                        background: #b20c0c;
                        position: absolute;
                        height: 40px;
                        width: 40px;
                        border-radius: 50%;
                        line-height: 31px;
                        font-family: 'Josefin Sans', sans-serif;
                        font-weight: 300;
                        font-size: 14px;
                        border: 2px solid #FFF;
                        box-shadow: 0 0 0 1px #b20c0c;
                        top: 5px;
                        right: 25%;
                    }

                    #slider-control img {
                        padding-top: 60%;
                        margin: 0 auto;
                    }

                    @media screen and (max-width: 992px) {
                        #slider-control img {
                            padding-top: 70px;
                            margin: 0 auto;
                        }
                    }

                    .carousel-showmanymoveone .carousel-control {
                        width: 4%;
                        background-image: none;
                    }

                    .carousel-showmanymoveone .carousel-control.left {
                        margin-left: 5px;
                    }

                    .carousel-showmanymoveone .carousel-control.right {
                        margin-right: 5px;
                    }

                    .carousel-showmanymoveone .cloneditem-1,
                    .carousel-showmanymoveone .cloneditem-2,
                    .carousel-showmanymoveone .cloneditem-3,
                    .carousel-showmanymoveone .cloneditem-4,
                    .carousel-showmanymoveone .cloneditem-5 {
                        display: none;
                    }

                    @media all and (min-width: 768px) {

                        .carousel-showmanymoveone .carousel-inner>.active.left,
                        .carousel-showmanymoveone .carousel-inner>.prev {
                            left: -50%;
                        }

                        .carousel-showmanymoveone .carousel-inner>.active.right,
                        .carousel-showmanymoveone .carousel-inner>.next {
                            left: 50%;
                        }

                        .carousel-showmanymoveone .carousel-inner>.left,
                        .carousel-showmanymoveone .carousel-inner>.prev.right,
                        .carousel-showmanymoveone .carousel-inner>.active {
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
                            display: block;
                        }
                    }

                    @media all and (min-width: 768px) and (transform-3d),
                    all and (min-width: 768px) and (-webkit-transform-3d) {

                        .carousel-showmanymoveone .carousel-inner>.item.active.right,
                        .carousel-showmanymoveone .carousel-inner>.item.next {
                            -webkit-transform: translate3d(50%, 0, 0);
                            transform: translate3d(50%, 0, 0);
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner>.item.active.left,
                        .carousel-showmanymoveone .carousel-inner>.item.prev {
                            -webkit-transform: translate3d(-50%, 0, 0);
                            transform: translate3d(-50%, 0, 0);
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner>.item.left,
                        .carousel-showmanymoveone .carousel-inner>.item.prev.right,
                        .carousel-showmanymoveone .carousel-inner>.item.active {
                            -webkit-transform: translate3d(0, 0, 0);
                            transform: translate3d(0, 0, 0);
                            left: 0;
                        }
                    }

                    @media all and (min-width: 992px) {

                        .carousel-showmanymoveone .carousel-inner>.active.left,
                        .carousel-showmanymoveone .carousel-inner>.prev {
                            left: -16.666%;
                        }

                        .carousel-showmanymoveone .carousel-inner>.active.right,
                        .carousel-showmanymoveone .carousel-inner>.next {
                            left: 16.666%;
                        }

                        .carousel-showmanymoveone .carousel-inner>.left,
                        .carousel-showmanymoveone .carousel-inner>.prev.right,
                        .carousel-showmanymoveone .carousel-inner>.active {
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner .cloneditem-2,
                        .carousel-showmanymoveone .carousel-inner .cloneditem-3,
                        .carousel-showmanymoveone .carousel-inner .cloneditem-4,
                        .carousel-showmanymoveone .carousel-inner .cloneditem-5,
                        .carousel-showmanymoveone .carousel-inner .cloneditem-6 {
                            display: block;
                        }
                    }

                    @media all and (min-width: 992px) and (transform-3d),
                    all and (min-width: 992px) and (-webkit-transform-3d) {

                        .carousel-showmanymoveone .carousel-inner>.item.active.right,
                        .carousel-showmanymoveone .carousel-inner>.item.next {
                            -webkit-transform: translate3d(16.666%, 0, 0);
                            transform: translate3d(16.666%, 0, 0);
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner>.item.active.left,
                        .carousel-showmanymoveone .carousel-inner>.item.prev {
                            -webkit-transform: translate3d(-16.666%, 0, 0);
                            transform: translate3d(-16.666%, 0, 0);
                            left: 0;
                        }

                        .carousel-showmanymoveone .carousel-inner>.item.left,
                        .carousel-showmanymoveone .carousel-inner>.item.prev.right,
                        .carousel-showmanymoveone .carousel-inner>.item.active {
                            -webkit-transform: translate3d(0, 0, 0);
                            transform: translate3d(0, 0, 0);
                            left: 0;
                        }
                    }
                </style>
                <script>
                    $(document).ready(function() {

                        $('#itemslider').carousel({
                            interval: 3000
                        });

                        $('.carousel-showmanymoveone .item').each(function() {
                            var itemToClone = $(this);

                            for (var i = 1; i < 6; i++) {
                                itemToClone = itemToClone.next();

                                if (!itemToClone.length) {
                                    itemToClone = $(this).siblings(':first');
                                }

                                itemToClone.children(':first-child').clone()
                                    .addClass("cloneditem-" + (i))
                                    .appendTo($(this));
                            }
                        });
                    });
                </script>
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
                            <p>We do not want to scare the custoners with graveyard,
                                We want to show how they can share postive Memory
                                with families and friends.</p>
                            <p>We want to create a story that parents can
                                Tell-Grand children about Grandparent ancestorial.</p>
                            <p>We are online (Virtual Site that will tell their past to the
                                present, and the future.)</p>
                            <p>We Provide an interacting platform with pictures,
                                videos, audio, music, poems and all that will make their
                                visit to the ancestorial site a good experience.</p>
                            <p>A Place where parents will send their children to go and
                                research the Grand Parent.</p>
                            <a href="{!! asset('/user/aboutus') !!}"><button type="submit"
                                    class="btn btn-primary aboutclick">Learn More</button></a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="aboutimg">
                            <img src="{!! asset('public/theme/user_theme/images/about-us.png') !!}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="pkgarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="pkgcolab">
                            <h2>MEMORIAL <br> PACKAGES</h2>
                            <div class="qa">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading qabox" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h4>Standard (15 Memorial page)</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Standard (15 Memorial page)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading qabox" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <h4>Premium (30 Memorial page)</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Premium (30 Memorial page)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading qabox" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    <h4>Premium Plus (50 Memorial page)</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Premium Plus (50 Memorial page)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading qabox" role="tab" id="headingfour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapsefour" aria-expanded="false"
                                                    aria-controls="collapsefour">
                                                    <h4>VIP Premium Plus (80 Memorial page)</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingfour">
                                            <div class="panel-body">
                                                VIP Premium Plus (80 Memorial page)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!! asset('/user/plans') !!}" class="btn btn-primary pkgclick">View All Packages</a>
                        </div>
                    </div>
                    <div class="col-sm-4 packageSpace">
                        <div class="wrap">
                            <span class="ribbon6">Most Popular</span>
                        </div>
                        <div class="packageBox">
                            <div class="packagePrice" id="pacakages_price_33"></div>
                            <div class="packageData" id="pacakages_content_33">
                                <h3 id="pacakages_title_33">Standard</h3>
                                <ul>
                                    <li class="lihesmall">Highly Secure With Password Login Access</li>
                                    <li>Decease Bio</li>
                                    <li>Decease Bio</li>
                                    <li>Image Gallery</li>
                                </ul>
                            </div>
                            <div class="btnPackage">
                                <!-- <button type="submit" class="btn btn-primary pkgbarclick">Buy Now</button> -->
                                <a href="{!! asset('/user/plans') !!}" class="btn btn-primary pkgbarclick">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="samplearea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="memorialhead">
                            <h2>CREATING AN ONLINE MEMORIAL <br> SITE IS SIMPLE</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="creatbox">
                            <img src="{!! asset('public/theme/user_theme/images/Create-A-Free.png') !!}" class="img-responsive">
                            <h3>Create a Free Memorial</h3>
                            <p>by adding basic or detailed information</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="creatbox">
                            <img src="{!! asset('public/theme/user_theme/images/Add-Unlimited.png') !!}" class="img-responsive">
                            <h3>Add Unlimited Content</h3>
                            <p>Including photos, videos and life history</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="creatbox">
                            <img src="{!! asset('public/theme/user_theme/images/Share-story.png') !!}" class="img-responsive">
                            <h3>Share Their Life Story</h3>
                            <p>and allow others to collaborate and pay tribute</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="creatbox">
                            <img src="{!! asset('public/theme/user_theme/images/Geotag-The-Final.png') !!}" class="img-responsive">
                            <h3>Geotag The Final Resting Place</h3>
                            <p>for precise cemetery directions</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a type="submit" href="{!! asset('user/testing') !!}" class="btn btn-primary memorialclick">View
                            Sample Memorial</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="formdata">
                            <h2>CREATE A MEMORIAL WEBSITE</h2>
                            <p>Preserve and share memories of your loved one.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="formarea">
                        <h4>I WANT TO SHARE MEMORIES OF</h4>
                        <form>
                            <div class="form-row">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-sm-2">
                                    <a type="submit" href="{!! asset('user/memorialform') !!}"
                                        class="btn btn-primary formclick">Get Started</a>
                                </div>
                            </div>
                        </form>
                        <p>Learn more about our memorial website ></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
