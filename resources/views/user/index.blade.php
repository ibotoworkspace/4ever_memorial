<!DOCTYPE html>
<html lang="en">

<head>
  <title>4Year Project</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('theme/user_theme/images/favicon.png')!!}" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{!! asset('theme/user_theme/css/main.css')!!}" rel="stylesheet">


</head>

<body>

  <section>
    <div class="topbanner">
      <div class="container top">
        <div class="row hidden-xs">
          <div class="col-sm-4">
            <div class="logoarea">
              <img src="{!! asset('theme/user_theme/images/logo.png')!!}" class="img-responsive">
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
              <i class="fa fa-sign-in" aria-hidden="true"> Sign In</i>
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
                <a href="/"><img src="{!! asset('theme/user_theme/images/logo.png')!!}" class="img-responsive"></a>
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
                        <a href="{!!asset('user/')!!}"><span>HOME</span> </a>
                      </li>
                      <li id="2">
                        <a href="{!!asset('user/aboutus')!!}"><span>ABOUT</span> </a>
                      </li>
                      <li id="3">
                      <a href="{!!asset('admin/template/template1')!!}"><span>CREATE A MEMORIAL</span> </a>
                      </li>
                      <li id="4">
                        <a href="{!!asset('user/')!!}"><span>PLANS & FEATURES</span> </a>
                      </li>
                      <li id="5">
                        <a href="{!!asset('user/')!!}"><span>TESTIMONIALS</span> </a>
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
            <div class="bannerdata">
              <img src="{!! asset('theme/user_theme/images/icon.png')!!}" class="img-responsive">
              <h1>4 EVER MEMORY</h1>
              <h2>Beautiful, Free Online Memorials & Tributes</h2>
              <h3>4Ever Virtual Cemetery online tributes are a simple way <br>
                to preserve, celebrate and share a loved one's legacy.</h3>
              <button type="submit" class="btn btn-primary banclick">Click here to create a memorial</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="aboutarea">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="aboutdata">
              <h2>ABOUT US</h2>
              <p>We do not want to scare the custoners with graveyard,
                We want to shoe how the can share postive Memory
                with families and friends.</p>
              <p>Went want to create a story that parents can
                Tell-Grand children about Grandparent ancestorial.</p>
              <p>We are online (Virtual Site that will tell their past to the
                present, and the future.)</p>
              <p>We Provide an interacting platform with pictures,
                videos, audio, music, poems and all that will maketheir
                visit to the ancestorial site a good experience.</p>
              <p>A Place where parents will send their children to go and
                research the Grand Parent.</p>
              <a href="aboutus.html"><button type="submit" class="btn btn-primary aboutclick">Learn More</button></a>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="aboutimg">
              <img src="{!! asset('theme/user_theme/images/about-us.png')!!}" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="pkgarea">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="pkgcolab">
              <h2>MEMORIAL <br> PACKAGES</h2>
              <div class="qa">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading qabox" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          <h4>Standard (15 Memorial page)</h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Standard (15 Memorial page)
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading qabox" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                          href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4>Premium (30 Memorial page)</h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Premium (30 Memorial page)
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading qabox" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                          href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4>Premium Plus (50 Memorial page)</h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                      aria-labelledby="headingThree">
                      <div class="panel-body">
                        Premium Plus (50 Memorial page)
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading qabox" role="tab" id="headingfour">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                          href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                          <h4>VIP Premium Plus (80 Memorial page)</h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                      aria-labelledby="headingfour">
                      <div class="panel-body">
                        VIP Premium Plus (80 Memorial page)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pkgclick">View All Packages</button>
            </div>
          </div>
          <div class="col-sm-4 packageSpace">
            <div class="wrap">
              <span class="ribbon6">Most Popular</span>
            </div>
            <div class="packageBox">
              <div class="packagePrice" id="pacakages_price_33"></div>
              <div class="packageData" id="pacakages_content_33">
                <h3 id="pacakages_title_33">Standard</h3>
                <ul>
                  <li class="lihesmall">Highly Secure With Password Login Access</li>
                  <li>Decease Bio</li>
                  <li>Decease Bio</li>
                  <li>Image Gallery</li>
                </ul>
              </div>
              <div class="btnPackage">
                <button type="submit" class="btn btn-primary pkgbarclick">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="samplearea">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="memorialhead">
              <h2>CREATING AN ONLINE MEMORIAL <br> SITE IS SIMPLE</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="creatbox">
              <img src="{!! asset('theme/user_theme/images/Create-A-Free.png')!!}" class="img-responsive">
              <h3>Create a Free Memorial</h3>
              <p>by adding basic or detailed information</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="creatbox">
              <img src="{!! asset('theme/user_theme/images/Add-Unlimited.png')!!}" class="img-responsive">
              <h3>Add Unlimited Content</h3>
              <p>Including photos, videos and life history</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="creatbox">
              <img src="{!! asset('theme/user_theme/images/Share-story.png')!!}" class="img-responsive">
              <h3>Share Their Life Story</h3>
              <p>and allow others to collaborate and pay tribute</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="creatbox">
              <img src="{!! asset('theme/user_theme/images/Geotag-The-Final.png')!!}" class="img-responsive">
              <h3>Geotag The Final Resting Place</h3>
              <p>for precise cemetery directions</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary memorialclick">View Sample Memorial</button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="formdata">
              <h2>CREATE A MEMORIAL WEBSSITE</h2>
              <p>Preserve and share memories of your loved one.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="formarea">
            <h4>I WANT TO SHARE MEMORIES OF</h4>
            <form>
              <div class="form-row">
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary formclick">Get Started</button>
                </div>
              </div>
            </form>
            <p>Learn more about our memorial website ></p>
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