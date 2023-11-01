

@section('title')
    <title>4Ever My_memorials</title>
@endsection

@extends('user_layout.main_header_footer')

@section('headerfiles')
    <link href="{!! asset('theme/user_theme/css/mymemorial.css') !!}" rel="stylesheet">
@endsection

<style>
    .contacttopbanner {
    border-bottom: 5px none #2dafc3;
    background-image: url(../images/headerimage.jpg);
    background-position: 100%;
    background-size: cover;
    background-repeat: no-repeat;
}
.barmainbox {
    margin-top: 50px;
    margin-bottom: 50px;
}
.onlymymemo {
    margin-top: 50px;
}
</style>

@section('body')
    <section>
        <div class="contacttopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>MY MEMORIALS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="tabsarea">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="tabdata">
                            <ul class="nav nav-tabs tabmenu">
                               
                            </ul>
                            <div class="tab-content barmainbox">
                               
                            @foreach($memorials as $m)

    
                                <div class="col-sm-12 outer-bx">
                                    <div class="col-sm-6">
                                        <div class="img-bx">
                                        <img src="{!! $m->style->template_image!!}" class="img-responsive">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="plandatas">
                                        <h4>{!! ucwords($m->f_name) !!}{!! ucwords($m->m_name) !!}{!! ucwords($m->l_name) !!}</h4>
                                            <p><b>Email:  </b> {!! ucwords($m->email) !!} <span class="sidetick"><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
                                            <p><b> Born:  </b>{!! ucwords($m->b_year) !!} <span class="sidetick"><i class="fa fa-calendar" aria-hidden="true"></i></span></p>
                                            <p><b>Death:  </b> {!! ucwords($m->p_year) !!} <span class="sidetick"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></p>
                                           <div class="inerpkgclick">
                                                <a href="{!! asset('user/get_memorial/'.$m->email) !!}">
                                                    <input type="button"  class="btn btn-primary banclick" value="Open">
                                                    

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="col-sm-12 outer-bx">
                                    <div class="col-sm-6">
                                        <div class="img-bx">
                                        <img src="{!! asset('https://stagging.hatinco.com/4_ever_memories/public/user_templates/slider/image/template_2.png') !!}" class="img-responsive">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="plandatas">
                                        <h4>Anthony Joseph</h4>
                                            <p><b>Email:  </b> admin@mail.com <span class="sidetick"><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
                                            <p><b> Born:  </b>12 jul 1990 <span class="sidetick"><i class="fa fa-calendar" aria-hidden="true"></i></span></p>
                                            <p><b>Death:  </b> 12 aug 1015 <span class="sidetick"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></p>
                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <input type="button"  class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 outer-bx">
                                    <div class="col-sm-6">
                                        <div class="img-bx">
                                        <img src="{!! asset('https://stagging.hatinco.com/4_ever_memories/public/user_templates/slider/image/template_3.png') !!}" class="img-responsive">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="plandatas">
                                        <h4>Anthony Joseph</h4>
                                            <p><b>Email:  </b> admin@mail.com <span class="sidetick"><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
                                            <p><b> Born:  </b>12 jul 1990 <span class="sidetick"><i class="fa fa-calendar" aria-hidden="true"></i></span></p>
                                            <p><b>Death:  </b> 12 aug 1015 <span class="sidetick"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></p>
                                           <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <input type="button"  class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 outer-bx">
                                    <div class="col-sm-6">
                                        <div class="img-bx">
                                        <img src="{!! asset('https://stagging.hatinco.com/4_ever_memories/public/user_templates/slider/image/template_4.png') !!}" class="img-responsive">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="plandatas">
                                        <h4>Anthony Joseph</h4>
                                            <p><b>Email:  </b> admin@mail.com <span class="sidetick"><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
                                            <p><b> Born:  </b>12 jul 1990 <span class="sidetick"><i class="fa fa-calendar" aria-hidden="true"></i></span></p>
                                            <p><b>Death:  </b> 12 aug 1015 <span class="sidetick"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></p>
                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <input type="button"  class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 outer-bx">
                                    <div class="col-sm-6">
                                        <div class="img-bx">
                                        <img src="{!! asset('https://stagging.hatinco.com/4_ever_memories/public/user_templates/slider/image/template_1.png') !!}" class="img-responsive">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="plandatas">
                                        <h4>Anthony Joseph</h4>
                                            <p><b>Email:  </b> admin@mail.com <span class="sidetick"><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
                                            <p><b> Born:  </b>12 jul 1990 <span class="sidetick"><i class="fa fa-calendar" aria-hidden="true"></i></span></p>
                                            <p><b>Death:  </b> 12 aug 1015 <span class="sidetick"><i class="fa fa-calendar-o" aria-hidden="true"></i></span></p>
                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <input type="button"  class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="{!!asset('user/memorial/update_plan')!!}" method="post" id="update_plan_form">
            {!!csrf_field()!!}
            <input type="hidden" name="memorial_id" class="memorial_id">
            <input type="hidden" name="plan_id" id="plan_id">
        </form>
    </section>
       
    @include('layouts.myapp_js')

    @endsection
