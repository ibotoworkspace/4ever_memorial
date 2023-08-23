<?php 
  $message = Session::get('error')  
?>
@yield('title')
<link rel="icon" type="image/png" sizes="16x16" href="{!! asset('theme/user_theme/images/favicon.png') !!}" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{!! asset('theme/user_theme/css/main.css') !!}" rel="stylesheet">
@yield('headerfiles')
</head>

<body>

    @if (isset($message))
        <div class="alert alert-danger">
            <ul>
                @foreach (Session::get('error')->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    @if (isset($message))
        <div class="alert alert-info">
            <ul>
                @foreach (Session::get('success')->all() as $success)
                    <li>{{ $success }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    

    @yield('body')

{{-- Cropper Modal --}}
@include('partial_layouts.cropper.cropper_html')
{{-- End Cropper Modal --}}



    <section>
        <div class="contactarea onlymymemo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactdata">
                            <h3>Plant a tree as a living tribute</h3>
                            <h2>MEMORIAL TREES <br> BY 4EVER </h2>
                            <p>Created by Internet Pioneer Momolla Kokomolla in 1964,<br>
                                It is the oldest online Cemetery & Memorial Site in the World.</p>
                            <a href="{!! asset('/user/contactus') !!}"><button type="submit" class="btn btn-primary contactclick">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sign in modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modhead">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign in With Your Email</h5>
                </div>
                <div class="modal-body">
                    <div class="signmodaldata">
                        <form action="{!! asset('user/login') !!}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Enter Your Email address :</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="email" placeholder="email address">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter Your Password :</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    aria-describedby="password" placeholder="password">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mosubclick">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- End Sign in modal --}}

    {{-- Register in modal --}}
    <div class="modal fade" id="remodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modhead">
                    <h5 class="modal-title" id="exampleModalLongTitle">Register With Your Email</h5>
                </div>
                <div class="modal-body">
                    <div class="signmodaldata">
                        <form action="{!! asset('user/register') !!}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Enter Name :</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    aria-describedby="email" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Enter Your Email address :</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="email" placeholder="email address">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter Your Password :</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    aria-describedby="password" placeholder="password">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mosubclick">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- End Register in modal --}}

    
<style>
    ul.nav.navbar-nav.fomenu {
    display: flex;
    justify-content: center !important;
    float: none;
}
</style>
    <section>
        <div class="footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footerlogo">
                            <img src="{!! asset('theme/user_theme/images/footer-logo.png') !!}" class="img-responsive">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <div class="fotermenu">
                                <div class="navbar-collapse nav-collapse collapse fomen">
                                    <ul class="nav navbar-nav fomenu">
                                        <li id="1">
                                            <a href="{!! asset('/user/service_term') !!}"><span>TERMS OF SERVICES</span> </a>
                                        </li>
                                        <li id="2">
                                            <a href="{!! asset('/user/privacy_policy') !!}"><span>Privacy Policy</span> </a>
                                        </li>
                                        {{-- <li id="3">
                                            <a href=""><span>CREATE A MEMORIAL</span> </a>
                                        </li>
                                        <li id="4">
                                            <a href=""><span>PLANS & FEATURES</span> </a>
                                        </li>
                                        <li id="5">
                                            <a href=""><span>TESTIMONIALS</span> </a>
                                        </li>
                                        <li id="6">
                                            <a href=""><span>BLOG</span> </a>
                                        </li>
                                        <li id="7">
                                            <a href=""><span>CONTACT</span> </a>
                                        </li>
                                        <li id="8">
                                            <a href=""><span>MY MEMORIALS</span> </a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lastfooter">
                            <p>Copyright © <?php echo date("Y"); ?> 4ever memory - Designed and Developed by <a href="https://ibotoempire.com/" target="_blank" class="minename">Iboto-Empire</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
