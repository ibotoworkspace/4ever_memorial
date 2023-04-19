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
    <link href="{!! asset('theme/user_theme/css/mymemorial.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/memorial.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/main.css') !!}" rel="stylesheet">

    
</head>

<body onload="disableSubmit()">

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
                                <!-- <li><a data-toggle="tab" href="#menu1">ABOUT YOUR LOVED ONE</a></li>
                                <li><a data-toggle="tab" href="#menu2">CHOOSE YOUR PLAN</a></li>
                                <li id="privacy_tab"><a data-toggle="tab" href="#menu3">PRIVACY OPTIONS</a></li> -->
                            </ul>
                            <div class="tab-content">
                               

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
                                                    <input type="button" onclick="submit_update_plan(1)" class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 outer-bx">
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
                                                    <input type="button" onclick="submit_update_plan(1)" class="btn btn-primary banclick" value="Open">

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
                                                    <input type="button" onclick="submit_update_plan(1)" class="btn btn-primary banclick" value="Open">

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
                                                    <input type="button" onclick="submit_update_plan(1)" class="btn btn-primary banclick" value="Open">

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
                                                    <input type="button" onclick="submit_update_plan(1)" class="btn btn-primary banclick" value="Open">

                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
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
                $('.memorial_id').val(user_memorial.id);
            }
        }

        function submit_update_plan(selected_plan_id) {
            $('#plan_id').val(selected_plan_id);
            // $('#update_plan_form').submit();
            submit_form('#update_plan_form', 'open_tab');
            // submit_form('#memorial_id', 'open_tab');
        }

        function open_tab(res) {
            console.log('res', res);
            $('#privacy_tab').click();
        }

        function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('check')
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false
            })
        }

        function disableSubmit() {
            document.getElementById("submit").disabled = true;
        }

        function activateButton(element) {

            if (element.checked) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }

        }
    </script>


</body>

</html>