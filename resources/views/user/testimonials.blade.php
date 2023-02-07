<!DOCTYPE html>
<html lang="en">

<head>
    <title>4Year Project</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{!!asset(' images/favicon.png')!!}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!!asset('css/main.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/testimonials.css')!!}" rel="stylesheet">


</head>

<body>
    <section>
        <div class="testimonalpbanner">
            <div class="container top">
                <div class="row hidden-xs">
                    <div class="col-sm-4">
                        <div class="logoarea">
                            <img src="{!!asset('images/logo.png')!!}" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="topinput">
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                                placeholder="Find a Memorial">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="topicons">
                            <i class="fa fa-user-plus" aria-hidden="true"> Registration</i>
                            <i class="fa fa-sign-in" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"> Sign
                                In</i>



                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header modhead">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Sign in With Your Email</h5>
                                    </div>
                                    <div class="modal-body">
                                      <div class="signmodaldata">
                                        <form>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Your Email address :</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" placeholder="email address">
                                          </div>
                                          <div class="form-group form-check labelgroup">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label labelcd" for="exampleCheck1">I am visiting for the first
                                              time.</label>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary mosubclick">Submit</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menucont">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 visible-xs">
                            <div class="logoArea">
                                <a href="/"><img src="{!!asset('images/logo.png')!!}" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="row mobileNav">
                                <div class="col-xs-4 visible-xs xs-marker"></div>
                                <div class="col-xs-4 visible-xs xs-phone"></div>
                                <div class="col-xs-4 visible-xs">
                                    <button data-target=".navbar-collapse" data-toggle="collapse" id="mnav-button"
                                        class="navbar-toggle fa fa-bars fa-2x collapsed threebar" type="button">
                                    </button>
                                </div>
                            </div>
                            <nav>
                                <div class="jump">
                                    <div class="navbar-collapse nav-collapse collapse">
                                        <ul class="nav navbar-nav navmenu">
                                            <li id="1">
                                              <a href="{!!asset('/')!!}"><span>HOME</span></a>
                                            </li>
                                            <li id="2">
                                              <a href="{!!asset('user/aboutus')!!}"><span>ABOUT</span></a>
                                            </li>
                                            <li id="3">
                                            <a href="{!!asset('admin/template/template1')!!}"><span>CREATE A MEMORIAL</span> </a>
                                            </li>
                                            <li id="4">
                                              <a href="{!!asset('user/plans')!!}"><span>PLANS & FEATURES</span> </a>
                                            </li>
                                            <li id="5">
                                              <a href="{!!asset('user/testimonials')!!}"><span>TESTIMONIALS</span> </a>
                                            </li>
                                            <li id="6">
                                              <a href="{!!asset('user/blog')!!}"><span>BLOG</span> </a>
                                            </li>
                                            <li id="7">
                                              <a href="{!!asset('user/contactus')!!}"><span>CONTACT</span> </a>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
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
                            <img src="{!!asset('images/quote.png')!!}" class="img-responsive">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam
                                erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                                hendrerit in vulputate velit esse molestie conse</p>
                            <div class="namearea">
                                <h3>L</h3>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="testdataa">
                            <img src="{!!asset('images/quote.png')!!}" class="img-responsive">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam
                                erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                                hendrerit in vulputate velit esse molestie conse</p>
                            <div class="namearea">
                                <h3>L</h3>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <a href="contactus.html"><button type="submit" class="btn btn-primary contactclick">Contact
                                    Us</button></a>
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
                            <img src="{!!asset('images/footer-logo.png')!!}" class="img-responsive">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <div class="fotermenu">
                                <div class="navbar-collapse nav-collapse collapse fomen">
                                    <ul class="nav navbar-nav navmenu">
                                        <li id="1">
                                          <a href="{!!asset('/')!!}"><span>HOME</span></a>
                                        </li>
                                        <li id="2">
                                          <a href="{!!asset('user/aboutus')!!}"><span>ABOUT</span></a>
                                        </li>
                                        <li id="3">
                                        <a href="{!!asset('admin/template/template1')!!}"><span>CREATE A MEMORIAL</span> </a>
                                        </li>
                                        <li id="4">
                                          <a href="{!!asset('user/plans')!!}"><span>PLANS & FEATURES</span> </a>
                                        </li>
                                        <li id="5">
                                          <a href="{!!asset('user/testimonials')!!}"><span>TESTIMONIALS</span> </a>
                                        </li>
                                        <li id="6">
                                          <a href="{!!asset('user/blog')!!}"><span>BLOG</span> </a>
                                        </li>
                                        <li id="7">
                                          <a href="{!!asset('user/contactus')!!}"><span>CONTACT</span> </a>
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
