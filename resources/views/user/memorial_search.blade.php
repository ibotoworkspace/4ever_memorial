@extends('user_layout.main_header_footer')
@section('title')
    <title>4ever Memories</title>
@endsection

@section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset(' images/favicon.png') !!}" />
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/testimonials.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/search_memorials.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="testimonalpbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>ONLINE MEMORIALS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="testdataarea">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img7.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
                                    <h3>Anthony Joseph Blousby</h3>
                                    <h4>23rd june 2010 - 23rd june 2010</h4>
                                    <a href="#">
                                        <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img4.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
                                    <h3>Anthony Joseph Blousby</h3>
                                    <h4>23rd june 2010 - 23rd june 2010</h4>
                                    <a href="#">
                                        <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img5.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
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
                <div class="row ">
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img6.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
                                    <h3>Anthony Joseph Blousby</h3>
                                    <h4>23rd june 2010 - 23rd june 2010</h4>
                                    <a href="#">
                                        <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img8.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
                                    <h3>Anthony Joseph Blousby</h3>
                                    <h4>23rd june 2010 - 23rd june 2010</h4>
                                    <a href="#">
                                        <p><i class="fa fa-globe" aria-hidden="true"></i>mail@4evermemorial.com</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img9.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
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
                <div class="row ">
                    @foreach($memorials as $m)
                    <div class="col-sm-4">
                        <a href="{!! asset('user/get_memorial/'.$m->email) !!}" class="deco_no">
                            <div class="memo_box box_hvr">
                                <div class="img_area">
                                    <img src="{!! asset('images/prof_img7.jpg') !!}" class="img-responsive">
                                </div>
                                <div class="info_area">
                                    <h3>{!! ucwords($m->f_name) !!}-{!! ucwords($m->m_name) !!}-{!! ucwords($m->l_name) !!}</h3>
                                    <h4>{!! ucwords($m->b_year) !!} - {!! ucwords($m->p_year) !!}</h4>
                                    <a href="{!! asset('user/get_memorial/'.$m->email) !!}">
                                        <p><i class="fa fa-globe" aria-hidden="true"></i>{!! ucwords($m->email) !!}</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                    
                </div>
                <div class="view_all">
                    <a href=""><button class="btn">View all</button></a>
                </div>

            </div>
        </div>
    </section>
@endsection
