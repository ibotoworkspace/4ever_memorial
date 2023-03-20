@extends('user_layout.main_header_footer')

@section('title')
    <title>4Year Project Contact-US</title>
    @endsection
    

@section('headerfiles')
    <link href="{!! asset('theme/user_theme/css/contactus.css')!!}" rel="stylesheet">
    @endsection

    @section('body')
    <section>
        <div class="contacttopbanner">
          @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>CONTACT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contactdata conuniq">
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{!! asset('theme/user_theme/images/email.png')!!}" class="img-responsive">
                            </div>
                            <div class="infoboxtext">
                                <p>info@4evermemory.com</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{!! asset('theme/user_theme/images/phone.png')!!}" class="img-responsive">
                            </div>
                            <div class="infoboxtext">
                                <p>0123456789</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg loca">
                                <img src="{!! asset('theme/user_theme/images/location.png')!!}" class="img-responsive">
                            </div>
                            <div class="infoboxtext">
                                <p>4Forevermemory.com 817 Lorem 5th Ipsum, Lorem, L.P. 10003</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="contactform">
                        <h2>Get In Touch With Us</h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Type of inquiry*</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Make a Selection...</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Name*</label>
                                <input type="text" class="form-control" id="text" aria-describedby="text"
                                    placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Memorial Name*</label>
                                <input type="text" class="form-control" id="text" aria-describedby="text"
                                    placeholder="(if applies)">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your message*</label>
                                <input type="text" class="form-control" id="text" aria-describedby="text"
                                    placeholder="Please add your subject here">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                    placeholder="Please enter the specific details of your request. Please provide as much information as possible so we can help you quickly"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary contactclick">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection



 


