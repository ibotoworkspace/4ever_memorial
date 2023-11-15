@extends('user_layout.main_header_footer')
@section('title')
    <title>4ever Memories</title>
@endsection

@section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('public/images/favicon.png') !!}" />
    <link href="{!! asset('public/css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/css/testimonials.css') !!}" rel="stylesheet">
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
                            <img src="{!! asset('public/images/quote.png') !!}" class="img-responsive">
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
                            <img src="{!! asset('public/images/quote.png') !!}" class="img-responsive">
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
