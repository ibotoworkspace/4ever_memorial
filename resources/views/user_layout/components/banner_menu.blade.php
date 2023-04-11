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
                <i class="fa fa-user-plus" aria-hidden="true" data-toggle="modal" data-target="#remodal"> Registration</i>
                <i class="fa fa-sign-in" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"> Sign
                    In</i>

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
                                <a href="{!!asset('user/memorialform')!!}"><span>CREATE A MEMORIAL</span> </a>
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
                                <li id="8">
                                  <a href="{!!asset('user/my_memorials')!!}"><span>MY MEMORIALS</span> </a>
                                </li>
                              </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>