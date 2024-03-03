{{-- {!!dd($memorials)!!} --}}
@extends('user_layout.main_header_footer')
@section('title')
    <title>4ever Memories</title>
@endsection

@section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('public/images/favicon.png') !!}" />
    <link href="{!! asset('public/css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/css/testimonials.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/css/view_memorial.css') !!}" rel="stylesheet">
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
                @if (!count($memorials))
                    <div class="box_underline box_hvr">
                        <div class="row">
                            <div class="col-md-4 left_box">
                            </div>
                            <div class="col-sm-6">

                                <div class="">
                                    <div class="info_area1">
                                        <h1> List is empty </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="memo_img">
                                    <img src="{!! asset('public/images/memo1.png') !!}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @foreach ($memorials as $m)
                    <div class="box_underline box_hvr">
                        <div class="row">
                            <div class="col-md-4 left_box">
                                <div class="img_bx">
                                    <img src="{!! asset($m->image_show_var) !!}" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="{!! asset('user/get_memorial/' . $m->email) !!}" class="deco_no">
                                    <div class="">
                                        <div class="info_area1">
                                            <h3>{!! ucwords($m->f_name) !!}{!! ucwords($m->m_name) !!}{!! ucwords($m->l_name) !!}</h3>
                                            <h4>{!! ucwords($m->b_year) !!} - {!! ucwords($m->p_year) !!}</h4>
                                            <a href="{!! asset('user/get_memorial/' . $m->email) !!}">
                                                <p><i class="fa fa-globe" aria-hidden="true"></i>{!! ucwords($m->email) !!}
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <div class="memo_img">
                                    <img src="{!! asset('public/images/memo1.png') !!}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection