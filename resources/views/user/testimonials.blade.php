@extends('user_layout.main_header_footer')
@section('title')
    <title>4ever Memories</title>
@endsection

@section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset(' images/favicon.png') !!}" />
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/testimonials.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="testimonalpbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>TESTIMONIALS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="testdataarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="testdataa">
                            <img src="{!! asset('images/quote.png') !!}" class="img-responsive">
                            <p>At Forever Memorials, we are dedicated to providing the highest level of service and care for our customers. We understand that this can be a difficult time, which is why we strive to create memorialization products that honor and remember your loved ones in a thoughtful and meaningful way. 

We take great pride in helping families find joy in their memories during such trying times. Our customers have found comfort in the beautiful memorial plaques, monuments, cenotaphs, ornaments, and other products we offer as an expression of love for their loved ones. We've heard countless stories about how our products have helped family members get through tough times and celebrate the life of their loved ones with dignity and respect. 
</p>
                            <!-- <div class="namearea">
                                <h3>L</h3>
                                <p>Lorem ipsum</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="testdataa">
                            <img src="{!! asset('images/quote.png') !!}" class="img-responsive">
                            <p>Our goal is to help you create a lasting memorial that honors your loved one and provides comfort for their family and friends for years to come. We hope that the many positive testimonials from our customers will provide an indication of the care we take in the products we create, as well as the exceptional level of customer service you can expect at Forever Memorials. </br></br>

If you are looking for a way to remember your loved one with respect and dignity, please contact us today to learn more about how Forever Memorials can help. We look forward to providing you with a thoughtful memorialization product that reflects the life of your loved one in a meaningful way.</br>   </br>
</p>
                            <!-- <div class="namearea">
                                <h3>L</h3>
                                <p>Lorem ipsum</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




<!--
<section>
        <div class="contactarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactdata">
                            <h3>Plant a tree as a living tribute</h3>
                            <h2>MEMORIAL TREES <br> BY 4EVER </h2>
                            <p>Created by Internet Pioneer Momolla Kokomolla in 1964,<br>
                                It is the oldest online Cemetery & Memorial Site in the World.</p>
                            <a href="contactus.html"><button type="submit" class="btn btn-primary contactclick">ContactUs</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footerlogo">
                            <img src="{!! asset('images/footer-logo.png') !!}" class="img-responsive">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <div class="fotermenu">
                                <div class="navbar-collapse nav-collapse collapse fomen">
                                    <ul class="nav navbar-nav navmenu">
                                        <li id="1">
                                          <a href="{!! asset('/') !!}"><span>HOME</span></a>
                                        </li>
                                        <li id="2">
                                          <a href="{!! asset('user/aboutus') !!}"><span>ABOUT</span></a>
                                        </li>
                                        <li id="3">
                                        <a href="{!! asset('admin/template/template1') !!}"><span>CREATE A MEMORIAL</span> </a>
                                        </li>
                                        <li id="4">
                                          <a href="{!! asset('user/plans') !!}"><span>PLANS & FEATURES</span> </a>
                                        </li>
                                        <li id="5">
                                          <a href="{!! asset('user/testimonials') !!}"><span>TESTIMONIALS</span> </a>
                                        </li>
                                        <li id="6">
                                          <a href="{!! asset('user/blog') !!}"><span>BLOG</span> </a>
                                        </li>
                                        <li id="7">
                                          <a href="{!! asset('user/contactus') !!}"><span>CONTACT</span> </a>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lastfooter">
                            <p>Copyright © 2022 4ever memory - Designed and Developed by HAT-INC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
