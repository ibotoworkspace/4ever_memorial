<!DOCTYPE html>
<html lang="en">

<head>
    <title>4 Ever Memorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/memorial.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/main.css') !!}" rel="stylesheet">

</head>

<body>

    <section>
        <div class="contacttopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>CREATE A MEMORIAL</h1>
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
                                <!-- <li class=""><a data-toggle="tab" href="#home">ACCOUNT DETAILS</a></li> -->
                                <li><a data-toggle="tab" href="#menu1">ABOUT YOUR LOVED ONE</a></li>
                                <li><a data-toggle="tab" href="#menu2">CHOOSE YOUR PLAN</a></li>
                                <li><a data-toggle="tab" href="#menu3">PRIVACY OPTIONS</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- <div id="home" class="tab-pane fade in active">
                                    <div class="cardformarea">
                                        <h2>Your account details:</h2>
                                        <p>Already have an account? <span class="linktext">Sign in here.</span> </p>
                                        <form action="">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input name="ad_name" type="test" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input name="ad_lastname" type="test" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="ad_email" type="test" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Create Password</label>
                                                <input name="ad_pwd" type="test" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </form>
                                        <button type="submit" class="btn btn-primary contclik">Continue</button>
                                    </div>
                                </div> -->
                                <div id="menu1" class="tab-pane fade in active">
                                    <div class="cardformarea">
                                        <h2>This memorial is dedicated to:</h2>

                                        <form class="create_memorial_form" action="{!!asset('admin/user/adduser')!!}" method="post">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="test" name="f_name" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Middle Name</label>
                                                <input type="test" name="m_name" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="test" name="l_name" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label name="gender" for="exampleFormControlSelect1">Gender</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label name="relation" for="exampleFormControlSelect1">Relationship</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Please Select Relationship</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label name="memorial_designation" for="exampleFormControlSelect1">Memorial Designation</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Select Designation, If applies</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>

                                            <h5>More Detail (Optional)</h5>
                                            <div class="detailcard">
                                                <p>This information can also be updated at a later time:</p>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Born</p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="b_year" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Year</option>
                                                                <option>2001</option>
                                                                <option>2002</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="b_city" type="test" class="form-control" placeholder="City or Town">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="b_month" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Month</option>
                                                                <option>Jan</option>
                                                                <option>Feb</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="b_state" type="test" class="form-control" placeholder="State or Area">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="b_day" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Day</option>
                                                                <option>Monday</option>
                                                                <option>Tuesday</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="b_country" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Country</option>
                                                                <option>Pakistan</option>
                                                                <option>Dubai</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Passed away</p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="p_year" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Year</option>
                                                                <option>2001</option>
                                                                <option>2002</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="p_city" type="test" class="form-control" placeholder="City or Town">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="p_month" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Month</option>
                                                                <option>Jan</option>
                                                                <option>Feb</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="p_state" type="test" class="form-control" placeholder="State or Area">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <select name="p_day" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Day</option>
                                                                <option>Monday</option>
                                                                <option>Tuesday</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="p_country" class="form-control" id="exampleFormControlSelect1">
                                                                <option>Country</option>
                                                                <option>Pakistan</option>
                                                                <option>Dubai</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <h2>Memorial web address:</h2>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="exampleFormControlInput1">Email address</label>
                                                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="examplemail">
                                                        <p>forevermemorial.com</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <a data-toggle="tab" href="#menu2">
                                                <input type="button" onclick="submit_form('.create_memorial_form','create_memorial')" class="btn btn-primary contclik" value="Continue">
                                            </a>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">

                                    <div class="col-sm-6">
                                        <form action="admin/user/plan/{id}" method="post">
                                            <input type="hidden" name="memorial_id" id="memorial_id">
                                            <div class="plandata">
                                                <h4>STANDARD (15 MEMORIAL PACKAGE)</h4>
                                                <p>Highly Secure With Password Login Access <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Decease Bio <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Flower Donation Page <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Image Gallery <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <div class="inerpkgclick">
                                                    <input type="hidden" value="1" name="plan">
                                                    <a data-toggle="tab" href="#menu3">
                                                        <input type="submit" class="btn btn-primary banclick" value="Buy Now">
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="admin/user/plan/{id}" method="post">
                                            <div class="plandata">
                                                <h4>PREMIUM (30 MEMORIAL PAGE)</h4>
                                                <p>All in Standard And Biography of Deceased And Family Members <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Automated Anniversary Reminder <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Virtual Anniversary Organize By 4Ever (Extra Cost) <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Tribute Notes And Letters By Friends <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <div class="inerpkgclick">
                                                    <input type="hidden" value="2" name="plan">
                                                    <a data-toggle="tab" href="#menu3">
                                                        <input type="submit" class="btn btn-primary banclick" value="Buy Now">

                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="admin/user/plan/{id}" method="post">

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
                                                    <input type="hidden" value="3" name="plan">
                                                    <a data-toggle="tab" href="#menu3">
                                                        <button type="submit" class="btn btn-primary banclick">Buy
                                                            Now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="admin/user/plan/{id}" method="post">

                                            <div class="plandata">
                                                <h4>VIP PREMIUM PLUS (80 MEMORIAL PAGE)</h4>
                                                <p>(All in Premium Plus) <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Customized Dedicated Page <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Highly Secure Login Access <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>And All in Premium Plus <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <p>Search By Name For A Brief Information <span class="sidetick"><i class="fa fa-check" aria-hidden="true"></i></span></p>
                                                <div class="inerpkgclick">
                                                    <input type="hidden" value="4" name="plan">
                                                    <a data-toggle="tab" href="#menu3">
                                                        <button type="submit" class="btn btn-primary banclick">Buy
                                                            Now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="cardformarea option">
                                        <h2>Privacy options:</h2>
                                        <p>Would you like to share your memorial with others, or keep it private?</p>
                                        <span class="braketdata">(This can be changed later.)</span><br>
                                        <div class="form-group form-check memoreadio">
                                            <input name="visible_to_all" type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <div class="optrad">
                                                <h6>All visitors can view and contribute.</h6>
                                                <p>Recommended for most memorials. This option allows easy access to the
                                                    website and
                                                    facilitates collaboration.</p>
                                            </div>
                                        </div>
                                        <div class="form-group form-check memoreadio">
                                            <input name="visible_to_all" type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <div class="optrad">
                                                <h6>Visible only to me.</h6>
                                                <p>Choose this option if you do not want the memorial to be visible to
                                                    others at this time.</p>
                                            </div>
                                        </div>
                                        <div class="form-group form-check confi">
                                            <input name="" type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I agree to <span class="linktext">Terms of Use</span></label>
                                        </div>
                                        </form>
                                        <button type="submit" class="btn btn-primary contclik">Continue</button>
                                    </div>
                                </div>
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
                            <img src="{!! asset('theme/user_theme/images/footer-logo.png') !!}" class="img-responsive">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <div class="fotermenu">
                                <div class="navbar-collapse nav-collapse collapse fomen">
                                    <ul class="nav navbar-nav navmenu">
                                        <li id="1">
                                            <a href="{!! asset('/') !!}"><span>HOME</span></a>
                                        </li>
                                        <li id="2">
                                            <a href="{!! asset('user/aboutus') !!}"><span>ABOUT</span></a>
                                        </li>
                                        <li id="3">
                                            <a href="{!! asset('admin/template/template1') !!}"><span>CREATE A
                                                    MEMORIAL</span> </a>
                                        </li>
                                        <li id="4">
                                            <a href="{!! asset('user/plans') !!}"><span>PLANS & FEATURES</span> </a>
                                        </li>
                                        <li id="5">
                                            <a href="{!! asset('user/testimonials') !!}"><span>TESTIMONIALS</span> </a>
                                        </li>
                                        <li id="6">
                                            <a href="{!! asset('user/blog') !!}"><span>BLOG</span> </a>
                                        </li>
                                        <li id="7">
                                            <a href="{!! asset('user/contactus') !!}"><span>CONTACT</span> </a>
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
    @include('layouts.myapp_js')
    <script>
        var user_memorial = null;

        function create_memorial(memorial_form, response) {
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                $(memorial_form + " input").val("");
                $(memorial_form + " textarea").val("");
                user_memorial = response.user_memorial;
                $('#memorial_id').val(user_memorial.id);
            }
        }
    </script>


</body>

</html>