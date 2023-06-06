@extends('user_layout.main_header_footer')
@section('title')
    <title>4ever Memories</title>
@endsection

@section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset(' images/favicon.png') !!}" />
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/testimonials.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/view_memorial.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="testimonalpbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>VIEW MEMORIALS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="testdataarea">
            <div class="container memo_box">
              
                
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img8.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img8.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <div class="memo_img">
                                <img src="{!! asset('images/memo1.png') !!}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img8.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <div class="memo_img2">
                                <img src="{!! asset('images/memo2.png') !!}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img4.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img5.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img6.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img7.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box_underline box_hvr">
                    <div class="row">
                        <div class="col-md-4 left_box">
                            <div class="img_bx">
                                <img src="{!! asset('images/prof_img8.jpg') !!}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <a href="" class="deco_no">
                                <div class="">
                                    <div class="info_area1">
                                        <h3>Anthony Joseph Blousby</h3>
                                        <h4>23rd june 2010 - 23rd june 2010</h4>
                                        <a href="#">
                                            <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
