<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')  
  <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('theme/user_theme/images/favicon.png')!!}" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{!! asset('theme/user_theme/css/main.css')!!}" rel="stylesheet">
  @yield('headerfiles')
</head>
<body>
    @yield('body')

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
                            <a href="contactus.html"><button type="submit" class="btn btn-primary contactclick">Contact Us</button></a>
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
                <img src="{!! asset('theme/user_theme/images/footer-logo.png')!!}" class="img-responsive">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <div class="fotermenu">
                    <div class="navbar-collapse nav-collapse collapse fomen">
                    <ul class="nav navbar-nav fomenu">
                        <li id="1">
                        <a href=""><span>HOME</span> </a>
                        </li>
                        <li id="2">
                        <a href=""><span>ABOUT</span> </a>
                        </li>
                        <li id="3">
                        <a href="{!!asset('admin/template/template1')!!}"><span>CREATE A MEMORIAL</span> </a>
                        </li>
                        <li id="4">
                        <a href=""><span>PLANS 7& FEATURES</span> </a>
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
    </section>
  

</body>

</html>