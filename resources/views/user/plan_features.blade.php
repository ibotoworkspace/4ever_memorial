@extends('user_layout.main_header_footer')


    @section('title')
<title>4Year Project</title>
@endsection
    @section('headerfiles')
    <link rel="icon" type="image/png" sizes="16x16" href="{!!asset('images/favicon.png')!!}" />
    <link href="{!!asset('css/main.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/plan_features.css')!!}" rel="stylesheet">
    @endsection
    @section('body')
    <section>
        <div class="planbanner">
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
                            <h1>PLANS & FEATURES</h1>
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
                    <h3>MEMORIAL PACKAGES</h3>
                    <div class="col-sm-12">
                        <div class="plandata">
                            <h4>STANDARD (15 MEMORIAL PACKAGE)</h4>
                            <p>Highly Secure With Password Login Access <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Decease Bio <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Flower Donation Page <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Image Gallery <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <div class="inerpkgclick">
                                <button type="submit" class="btn btn-primary banclick">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 topspace">
                        <div class="plandata">
                            <h4>PREMIUM (30 MEMORIAL PAGE)</h4>
                            <p>All in Standard And Biography of Deceased And Family Members <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Automated Anniversary Reminder <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Virtual Anniversary Organize By 4Ever (Extra Cost) <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Tribute Notes And Letters By Friends <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <div class="inerpkgclick">
                                <button type="submit" class="btn btn-primary banclick">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 topspace">
                        <div class="plandata">
                            <h4>PREMIUM PLUS (50 MEMORIAL PAGE)</h4>
                            <p>All in Standard And Premium Including <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Tribute Page For Message From Family And Friends <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Grave Yard Image On Top Of The Page <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Link To Physical Grave Site <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Link Memorials Of Relative To Their Pages, Example <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>A. Wife Page Link To Husband Or Husband Page Link Wife <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>B. Husband Or Wife Memorials Merge Together <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <div class="inerpkgclick">
                                <button type="submit" class="btn btn-primary banclick">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 topspace">
                        <div class="plandata">
                            <h4>VIP PREMIUM PLUS (80 MEMORIAL PAGE)</h4>
                            <p>(All in Premium Plus) <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Customized Dedicated Page <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Highly Secure Login Access <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>And All in Premium Plus <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <p>Search By Name For A Brief Information <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                            <div class="inerpkgclick">
                                <button type="submit" class="btn btn-primary banclick">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    s
 
    @endsection





     
